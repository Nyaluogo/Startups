<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{

    public $with = ['user','team'];
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'domain',
        'email',
        'date_founded',
        'networth',
        'description',
        'document_path',
        'logo_path',
        'website',
        'phone_number',
        'status',
        'user_id',
        'linkedin',
    ];

      public function user()
    {
        return $this->belongsto('App\User');
    }

    public function team()
    {
        return $this->hasMany('App\Team');
    }
}
