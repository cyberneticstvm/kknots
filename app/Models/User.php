<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'dob' => 'date',
    ];

    public function roles()
    {
        return $this->belongsTo(Extra::class, 'role', 'id');
    }

    public function status()
    {
        return ($this->deleted_at) ? "<span class='badge bg-danger'>Deleted</span>" : "<span class='badge bg-success'>Active</span>";
    }

    public function redRow()
    {
        return ($this->deleted_at) ? "text-danger" : "";
    }

    public function verified()
    {
        return ($this->verified == 1) ? "<i class='fa fa-check text-success'></i>" : "<i class='fa fa-times text-danger'></i>";
    }

    public function plans()
    {
        return $this->belongsTo(Plan::class, 'plan', 'id');
    }

    public function genders()
    {
        return $this->belongsTo(Extra::class, 'gender', 'id');
    }

    public function settings()
    {
        return $this->hasOne(ProfileSetting::class, 'user_id', 'id');
    }

    public function age()
    {
        return Carbon::parse($this->dob)->age;
    }

    public function religions()
    {
        return $this->belongsTo(Religion::class, 'religion', 'id');
    }

    public function casts()
    {
        return $this->belongsTo(Caste::class, 'caste', 'id');
    }

    public function getPercentComplete(): float
    {
        $attributes = [
            'city',
            'gender',
            'dob',
            'marital_status',
            'email',
            'mobile',
            'religion',
            'caste',
            'subcaste',
            'verified'
        ];
        $complete = collect($attributes)->map(fn($attribute) => $this->getAttribute($attribute))
            ->filter()
            ->count();
        return ($complete / count($attributes)) * 100;
    }
}
