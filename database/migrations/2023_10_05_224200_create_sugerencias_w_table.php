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
        Schema::create('sugerencias_w', function (Blueprint $table) {
            $table->integer('sugerenciaW_id')->autoIncrement();
            $table->string('descripcion',200);

            $table->string('user',20);
            $table->foreign('user')->references('user')->on('cuentas');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sugerencias_w');
    }
};
