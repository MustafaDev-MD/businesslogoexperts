<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageRequest extends Model
{
    protected $fillable = [
        'service',
        'package',
        'first_name',
        'last_name',
        'email',
        'subject',
        'message',
        'files'
    ];

    protected $casts = [
        'files' => 'array'
    ];
}
