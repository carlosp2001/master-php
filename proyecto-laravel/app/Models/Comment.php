<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    // Relación de muchos a uno
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    // Relación de muchos a uno
    public function image()
    {
        return $this->belongsTo('App\Image', 'image_id');
    }
}
