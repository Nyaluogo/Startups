<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SPA extends Model
{
    protected $fillable = [
        'name',
        'type',
        'email',
        'phone_number',
        'linkedin',
        'image_path',
        'status',
        
    ];
}
