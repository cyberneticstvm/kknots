<?php

namespace App\Exports;

use App\Models\Caste;
use App\Models\Extra;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PartnerPreferenceExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $users =  User::where('role', 21)->latest()->get();
        return $users->map(function ($data, $key) {
            return [
                'No' =>  $key + 1,
                'Name' => $data->name,
                'Mobile' => $data->mobile,
                'Email' => $data->email,
                'DOB' => $data->dob->format('d.M.Y'),
                'Gender' => $data->genders?->name,
                'Religion' => $data->religions?->name,
                'Caste' => $data->casts?->name,
                'Verified' => $data->verified,
                'Created at' => $data->created_at->format('d.M.Y'),
                'Drinking' => Extra::whereIn('id', $data->settings?->details?->where('category', 'user')->whereIn('name', [36, 37])->pluck('name'))->pluck('name')->implode(','),
                'Partner' => Extra::whereIn('id', $data->settings?->details?->where('category', 'partner')->whereIn('name', [36, 37])->pluck('name'))->pluck('name')->implode(','),

            ];
        });
    }

    public function headings(): array
    {
        return ["SL No", "Name", "Mobile", "Email", "DOB", "Gender", "Religion", "Caste", "Verified", "Created at", "Drinking", "Partner",];
    }
}
