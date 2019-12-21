<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Classroom extends Model
{
    

    protected $fillable = [
        'name', 'description','user_id','code'
    ];

    public function users():BelongsToMany
    {
        return $this->belongsToMany('App\User')->withPivot('role');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
