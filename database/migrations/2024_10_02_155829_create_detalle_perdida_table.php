<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePerdidaTable extends Migration
{
    public function up()
    {
        Schema::create('detalle_perdida', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_perdida')->constrained('perdida');
            $table->foreignId('idProducto')->constrained('productos');
            $table->decimal('costo_unitario', 10, 2);
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_perdida');
    }
}
