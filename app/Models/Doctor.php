<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function patients()
    {
        return $this->hasMany(patient::class);
    }
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
