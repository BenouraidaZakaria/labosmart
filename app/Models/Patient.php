<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    // protected $fillable=[
    //     'doctor_id',
    //     'sexe',
    //     'cin',
    // ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
