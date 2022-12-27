<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $table = 'likes';

    // Relación de muchos a uno
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación de muchos a uno
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
