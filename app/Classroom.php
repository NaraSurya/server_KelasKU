<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    

    protected $fillable = [
        'name', 'description','user_id','code'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('role');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
