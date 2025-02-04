<?php

namespace App\Models;
use Illuminate\Support\Facades\Hash;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Oktatok extends Authenticatable
{
    protected $table = 'oktato';
    protected $fillable = ['nev', 'felhasznalonev', 'email', 'jelszo', 'szakterulet']; 

    public function setJelszoAttribute($value)
    {
        $this->attributes['jelszo'] = Hash::make($value);
    }
}
