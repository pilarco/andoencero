<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apiarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_apiario');
            $table->string('cantidad_colmenas');
            $table->string('municipio');
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
        Schema::drop('apiarios');
    }
}
