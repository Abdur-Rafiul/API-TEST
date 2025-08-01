<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Post extends Model
{
    use HasFactory;
      protected $guarded = [];
    public function comments(){
       return $this->hasMany(Comment::class);
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'imageable');
    }
}
