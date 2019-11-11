<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileMaterial extends Model
{
    protected $fillable = [
        'path', 'material_id'
    ];

    public function material()
    {
        return $this->belongsTo('App\Material');
    }
}
