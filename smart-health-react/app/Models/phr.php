<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phr extends Model
{
    use HasFactory;
    protected $fillable = [
        'height',
        'weight',
        'pid',
        'bmi',
        'bp',
        'bloodgroup',
        'sugar',
        'dob',
        'age'
    ];
}