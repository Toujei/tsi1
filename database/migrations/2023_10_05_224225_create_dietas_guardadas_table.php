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
        Schema::create('dietas_guardadas', function (Blueprint $table) {
            $table->string('user');
            $table->integer('dieta_id');

            $table->foreign('user')->references('user')->on('cuentas');
            $table->foreign('dieta_id')->references('dieta_id')->on('dietas');


            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dietas_guardadas');
    }
};
