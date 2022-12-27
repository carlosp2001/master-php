<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    // Relacion uno a muchos / un solo modelo de imagen tendra muchos comentarios
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Relación de uno a muchos / un solo modelo de imagen tendrá muchos likes
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // Relacion de muchos a uno / un mismo usuario puede crear muchas imagenes
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }


}
