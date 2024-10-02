<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleEntradaTable extends Migration
{
    public function up()
    {
        Schema::create('detalle_entrada', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_entrada')->constrained('entradas');
            $table->foreignId('idProducto')->constrained('productos');
            $table->decimal('costo_unitario', 10, 2);
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_entrada');
    }
}

