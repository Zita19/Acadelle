<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Oktatok;

class Kurzusok extends Model
{
    /** @use HasFactory<\Database\Factories\KurzusokFactory> */
    use HasFactory;

    protected $table = 'kurzusok';
    public function tanulok()
    {
        return $this->belongsToMany(Tanulo::class, 'kapcsolati_tabla', 'kurzus_id', 'tanulo_id')
                ->withPivot('befizetett_osszeg')
                ->withTimestamps();
    }
    protected $fillable = [
        'kurzus_nev',
        'helyszin',
        'kepzes_ideje',
        'online',
        'dij',
        'oktato_id'
    ];

    public function kapcsolatok()
    {
        return $this->belongsToMany(Tanulo::class, 'kapcsolati_tabla', 'kurzus_id', 'tanulo_id')
                    ->withPivot('befizetett_osszeg')
                    ->withTimestamps();
    }
    public function oktatok()
    {
        return $this->belongsToMany(Oktatok::class, 'oktatok_kurzusok', 'kurzus_id', 'oktato_id');
    }
}