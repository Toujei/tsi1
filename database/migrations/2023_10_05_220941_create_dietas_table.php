<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dietas', function (Blueprint $table) {
            $table->integer('dieta_id')->autoIncrement();
            $table->string('nombre',50);
            $table->string('descripcion',700);
            $table->string('tratamiento',700);
            $table->string('sugerencias',500);
            $table->integer('votos_positivos');
            $table->integer('votos_negativos');

            $table->integer('tipo_id');
            $table->foreign('tipo_id')->references('tipo_id')->on('tipos_d');


            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dietas');
    }
};
