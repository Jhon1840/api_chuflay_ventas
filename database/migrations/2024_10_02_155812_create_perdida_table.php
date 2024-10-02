<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerdidaTable extends Migration
{
    public function up()
    {
        Schema::create('perdida', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->decimal('total', 10, 2);
            $table->foreignId('idState')->constrained('cstate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perdida');
    }
}
