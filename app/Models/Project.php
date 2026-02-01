<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
        'code_lang',
        'link',
    ];

    protected $casts = [
        'code_lang' => 'array',
    ];
}
