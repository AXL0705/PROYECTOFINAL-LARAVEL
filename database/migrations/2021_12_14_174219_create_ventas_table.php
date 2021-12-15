<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario'); // se utiliza este tipo para hacer una llave forania a otr tabla
            $table->unsignedBigInteger('id_bicicleta');
            $table->timestamps();

            //vincular las llaves foraneas con el campo de la tabla y la tabla de donde es
            $table->foreign('id_usuario')->references('id')->on('usuarios'); // se agrega el ->onDelete('cascade') para cuando eliminemos el usuario se eliminen sus ventas
            $table->foreign('id_bicicleta')->references('id')->on('bicicletas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
