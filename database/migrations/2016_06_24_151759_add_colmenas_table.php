<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColmenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colmenas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apiario_id')->unsigned();
            $table->foreign('apiario_id')->references('id')->on('apiarios')->onDelete('cascade');
            $table->string('estado'); //verificar que es este campo ¨Piar
            $table->string('fecha');
            $table->string('techo'); // tipo Check
            $table->string('techo_interno'); // tipo Check
            $table->string('miel');
            $table->string('propoleo');
            $table->string('polen');
            $table->string('cuadros_cera_cria');
            $table->string('cuadros_sin_cera_cria');
            $table->string('cuadros_abierto_cria');
            $table->string('cuadros_operculado_cria');
            $table->string('cuadros_cera_alza');
            $table->string('cuadros_sin_cera_alza');
            $table->string('cuadros_abierto_alza');
            $table->string('cuadros_operculado_alza');
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
        Schema::drop('colmenas');
    }
}
