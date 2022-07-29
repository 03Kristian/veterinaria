<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);

            $table->enum('categoria',['gato', 'perro']);
            $table->string('foto');
            $table->enum('genero',['macho', 'hembra']);
            // $table->string('raza');

            $table->unsignedBigInteger('id_raza');
            $table->foreign("id_raza")->references('id')->on("razas")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('mascotas');
    }
}
