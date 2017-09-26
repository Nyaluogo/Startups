<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'startup_id',
        'role',
        'email',
        'phone_number',
        'linkedin',
        'image_path',
        
    ];

     public function user()
    {
        return $this->belongsto('App\Startup');
    }
}
