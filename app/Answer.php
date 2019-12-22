<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "question_user";

    protected $fillable = [
        'question_id', 'user_id', 'score','path' , 'answer'
    ];

    public $timestamps = false;



    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function question()
    {
        return $this->belongsTo('App\question');
    }

}
