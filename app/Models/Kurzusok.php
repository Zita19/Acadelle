<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurzusok extends Model
{
    /** @use HasFactory<\Database\Factories\KurzusokFactory> */
    use HasFactory;

    protected $table = 'kurzusok';
    public function tanulok()
    {
        return $this->belongsToMany(Tanulo::class, 'kapcsolati_tabla', 'kurzus_id', 'tanulo_id');
    }
    protected $fillable = [
        'kurzus_nev',
        'helyszin',
        'kepzes_ideje',
        'online',
        'dij'
    ];
}
