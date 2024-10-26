<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'objective',
        'certifications',
    ];

}