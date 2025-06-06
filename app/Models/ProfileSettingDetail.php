<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSettingDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function extras()
    {
        return $this->belongsTo(Extra::class, 'name', 'id');
    }
}
