<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable = [
        'title', 'user_id','classroom_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }

    public function questions()
    {
        return $this->hasMany('App\question');
    }
}
