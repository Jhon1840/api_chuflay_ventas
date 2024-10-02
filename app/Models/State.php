<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'cstate';

    protected $fillable = [
        'nombre',
    ];

    public $timestamps = false;

    public function productos()
    {
        return $this->hasMany(Producto::class, 'idState');
    }
}
