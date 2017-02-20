<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('produtoservice',20);
            $table->string ('titulo',100);
            $table->string ('detalhes',400);
            $table->string ('categoria',20);
            $table->double ('valormedio',8,2);
            $table->date('horaatendimento');
            $table->integer ('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('pedidos');
    }
}
