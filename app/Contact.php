<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'Contact';
    protected $fillable = ['subject','email','pengirim','nohp','pesan'];
    
}
