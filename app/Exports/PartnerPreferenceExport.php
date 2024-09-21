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
                'Smoking' => Extra::whereIn('id', $data->settings?->details?->where('category', 'user')->whereIn('name', [38, 49])->pluck('name'))->pluck('name')->implode(','),
                'Partner' => Extra::whereIn('id', $data->settings?->details?->where('category', 'partner')->whereIn('name', [38, 49])->pluck('name'))->pluck('name')->implode(','),
                'Television Programs' => Extra::whereIn('id', $data->settings?->details?->where('category', 'user')->whereIn('name', [58, 53, 57, 55, 54, 59, 50, 51, 56, 52])->pluck('name'))->pluck('name')->implode(','),
                'Partner' => Extra::whereIn('id', $data->settings?->details?->where('category', 'partner')->whereIn('name', [58, 53, 57, 55, 54, 59, 50, 51, 56, 52])->pluck('name'))->pluck('name')->implode(','),
                'Social Media' => Extra::whereIn('id', $data->settings?->details?->where('category', 'user')->whereIn('name', [65, 66, 67, 68, 69, 70, 71])->pluck('name'))->pluck('name')->implode(','),
                'Partner' => Extra::whereIn('id', $data->settings?->details?->where('category', 'partner')->whereIn('name', [65, 66, 67, 68, 69, 70, 71])->pluck('name'))->pluck('name')->implode(','),
                'Food Habits' => Extra::whereIn('id', $data->settings?->details?->where('category', 'user')->whereIn('name', [72, 73])->pluck('name'))->pluck('name')->implode(','),
                'Partner' => Extra::whereIn('id', $data->settings?->details?->where('category', 'partner')->whereIn('name', [72, 73])->pluck('name'))->pluck('name')->implode(','),
                'Reading Habits' => Extra::whereIn('id', $data->settings?->details?->where('category', 'user')->whereIn('name', [74, 75, 76, 77, 78, 79, 80, 81])->pluck('name'))->pluck('name')->implode(','),
                'Partner' => Extra::whereIn('id', $data->settings?->details?->where('category', 'partner')->whereIn('name', [74, 75, 76, 77, 78, 79, 80, 81])->pluck('name'))->pluck('name')->implode(','),
                'Movie Habits' => Extra::whereIn('id', $data->settings?->details?->where('category', 'user')->whereIn('name', [82, 83, 84, 85, 86, 87, 88, 93, 94])->pluck('name'))->pluck('name')->implode(','),
                'Partner' => Extra::whereIn('id', $data->settings?->details?->where('category', 'partner')->whereIn('name', [82, 83, 84, 85, 86, 87, 88, 93, 94])->pluck('name'))->pluck('name')->implode(','),
                'Friends Circle' => Extra::whereIn('id', $data->settings?->details?->where('category', 'user')->whereIn('name', [95, 96, 97, 98, 99, 100, 101])->pluck('name'))->pluck('name')->implode(','),
                'Partner' => Extra::whereIn('id', $data->settings?->details?->where('category', 'partner')->whereIn('name', [95, 96, 97, 98, 99, 100, 101])->pluck('name'))->pluck('name')->implode(','),
                'Marital Status Preference' => $data->settings?->mstatus?->name,
                'Caste Preference' => $data->casts?->name,
                'Education Preference' => $data->settings?->qualifications->name,
                'Occupation Preference' => $data->settings?->occupations->name,
            ];
        });
    }

    public function headings(): array
    {
        return ["SL No", "Name", "Mobile", "Email", "DOB", "Gender", "Religion", "Caste", "Verified", "Created at", "Drinking", "Partner", "Smoking", "Partner", "Television Programs", "Partner", "Social Media", "Partner", "Food Habits", "Partner", "Reading Habits", "Partner", "Movie Habits", "Partner", "Friends Circle", "Partner", "Marital Status Preference", "Caste Preference", "Education Preference", "Occupation Preference"];
    }
}
