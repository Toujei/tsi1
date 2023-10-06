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
        Schema::create('tipos_d', function (Blueprint $table) {
            $table->integer('tipo_id')->autoIncrement();
            $table->integer('peso_max'); 
            $table->integer('peso_min');
            $table->integer('estatura'); 
            $table->string('estado',20);

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_d');
    }
};
