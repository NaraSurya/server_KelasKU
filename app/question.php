<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = [
        'homework_id', 'question', 'point'
    ];

    public function homework()
    {
        return $this->belongsTo('App\Homework', 'foreign_key', 'other_key');
    }
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('score','path','answer');
    }
    
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
