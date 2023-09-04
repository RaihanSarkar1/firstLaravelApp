<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserImages extends Model
{
    protected $table = 'user_images';

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
