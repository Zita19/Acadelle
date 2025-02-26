<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapcsolati_tabla extends Model
{
    /** @use HasFactory<\Database\Factories\KapcsolatiTablaFactory> */
    use HasFactory;

    protected $table = 'kapcsolati_tabla';

    public function kurzus()
    {
        return $this->belongsTo(Kurzusok::class, 'kurzus_id');
    }

    public function tanulo()
    {
        return $this->belongsTo(Tanulo::class, 'tanulo_id');
    }
}
