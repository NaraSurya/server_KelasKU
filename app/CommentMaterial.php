<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentMaterial extends Model
{
    protected $fillable = [
        'comment', 'user_id', 'material_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function Material()
    {
        return $this->belongsTo('App\Material');
    }
}
