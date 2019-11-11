<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomUser extends Model
{
    protected $table = "classroom_user";
    protected $fillable = [
        'user_id', 'classroom_id'
    ];
}
