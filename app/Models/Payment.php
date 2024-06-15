<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function status()
    {
        return ($this->deleted_at) ? "<span class='badge bg-danger'>Deleted</span>" : "<span class='badge bg-success'>Active</span>";
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id', 'id');
    }

    public function pmodes()
    {
        return $this->belongsTo(Extra::class, 'payment_mode', 'id');
    }
}
