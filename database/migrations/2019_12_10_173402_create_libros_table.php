<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('libros');
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo',50);
            $table->string('autor',50);
            $table->enum('genero',['novela','cuento','poesia','+18']);
            $table->string('sinopsis',255);
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
        Schema::dropIfExists('libros');
    }
}
