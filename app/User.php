<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','picture',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function classrooms()
    {
        return $this->belongsToMany('App\Classroom', 'classroom_user', 'user_id', 'classroom_id');
    }

    public function classroom()
    {
        return $this->hasMany('App\Classroom');
    }

    public function announcements()
    {
        return $this->hasMany('App\Announcement');
    }

    public function commentAnnouncements()
    {
        return $this->hasMany('App\CommentAnnoucement');
    }

    public function materials()
    {
        return $this->hasMany('App\Material');
    }

    public function commentMaterials()
    {
        return $this->hasMany('App\CommentMaterial');
    }

    public function homeworks()
    {
        return $this->hasMany('App\Homework');
    }

    public function commentHomeworks()
    {
        return $this->hasMany('App\CommentHomework');
    }
    public function answer()
    {
        return $this->hasMany('App\Answer');
    }

    

    

    
}
