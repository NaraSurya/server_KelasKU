<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'title', 'body', 'user_id','classroom_id'
    ];


    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function commentAnnouncements()
    {
        return $this->hasMany('App\CommenAnnouncement');
    }


}
