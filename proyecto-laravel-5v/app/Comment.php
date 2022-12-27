<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';

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
