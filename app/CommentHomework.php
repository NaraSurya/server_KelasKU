<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentHomework extends Model
{
    protected $fillable = [
        'comment', 'user_id', 'homework_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }
}
