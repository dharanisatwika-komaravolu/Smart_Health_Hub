<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthAdmins extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'email',
        'phoneno',
        'address',
        'name',
    ];
}