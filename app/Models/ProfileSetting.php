<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSetting extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function details()
    {
        return $this->hasMany(ProfileSettingDetail::class, 'profile_setting_id', 'id');
    }

    public function qualifications()
    {
        return $this->belongsTo(Qualification::class, 'qualification', 'id');
    }

    public function occupations()
    {
        return $this->belongsTo(Occupation::class, 'occupation', 'id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'city', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function mstatus()
    {
        return $this->belongsTo(Extra::class, 'marital_status_preference', 'id');
    }
}
