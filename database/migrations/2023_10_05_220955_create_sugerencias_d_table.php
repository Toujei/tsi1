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
        Schema::create('sugerencias_d', function (Blueprint $table) {
            $table->integer('sugerenciaD_id')->autoIncrement();
            $table->string('nombre',50);
            $table->string('descripcion',700);

            $table->integer('tipo_id');
            $table->string('user',20);
            $table->foreign('tipo_id')->references('tipo_id')->on('tipos_d');
            $table->foreign('user')->references('user')->on('cuentas');


            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sugerencias_d');
    }
};
