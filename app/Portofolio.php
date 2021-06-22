<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    //
    protected $table = 'portofolio';
    protected $fillable = ['judul','deskripsi','image'];

     public function getImage()
    {
        return asset('images/portofolio/'.$this->image);
    }
}
