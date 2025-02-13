<?php

namespace App\Models;
use Illuminate\Support\Facades\Hash;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Tanulo extends Authenticatable
{
    protected $table = 'tanulo';
    protected $fillable = ['nev', 'felhasznalonev', 'email', 'jelszo', 'kepzettseg'];

    public function setJelszoAttribute($value)
    {
        $this->attributes['jelszo'] = Hash::make($value);
    }
    public function kurzusok()
    {
        return $this->belongsToMany(Kurzusok::class, 'kapcsolati_tabla', 'tanulo_id', 'kurzus_id')
                    ->withPivot('befizetett_osszeg')
                    ->withTimestamps();
    }
}
