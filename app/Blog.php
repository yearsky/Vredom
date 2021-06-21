<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['judul','deskripsi','image','author'];

     public function getImage()
    {
        return asset('images/blog/'.$this->image);
    }
}
