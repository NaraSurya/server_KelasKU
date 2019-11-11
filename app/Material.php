<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'title', 'body', 'user_id','classroom_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function fileMaterial()
    {
        return $this->hasMany('App\FileMaterial');
    }

    public function commentMaterial()
    {
        return $this->hasMany('App\CommentMaterial');
    }
}
