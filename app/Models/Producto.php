<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'codigo',
        'idState',
        'fecha',
        'precio',
        'costo',
        'existencia'
    ];

    public $timestamps = false;

    public function state()
    {
        return $this->belongsTo(State::class, 'idState');
    }
}
