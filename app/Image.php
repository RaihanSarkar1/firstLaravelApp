<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    public function users()
    {
        return $this->hasMany(UserImages::class, 'image_id', 'id');
    }
}
