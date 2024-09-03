<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProfileExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $users =  User::where('role', 21)->get();
        return $users->map(function ($data, $key) {
            return [
                'No' =>  $key + 1,
                'Name' => $data->name,
                'Mobile' => $data->mobile,
                'Email' => $data->email,
                'DOB' => $data->dob,
                'Gender' => $data->genders?->name,
                'Religion' => $data->religions?->name,
                'Caste' => $data->casts?->name,
                'Plan' => $data->plans?->name,
                'Verified' => $data->verified,
                'Created at' => $data->created_at->format('d.M.Y'),
            ];
        });
    }

    public function headings(): array
    {
        return ["SL No", "Name", "Mobile", "Email", "DOB", "Gender", "Religion", "Caste", "Plan", "Verified", "Created at"];
    }
}
