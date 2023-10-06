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
        Schema::create('cuentas', function (Blueprint $table) {
            $table->string('user')->primary();
            $table->tinyInteger('rol');
            $table->string('nombre',20);
            $table->string('email',30);
            $table->string('password',100);
            $table->integer('peso');
            $table->integer('estatura');
            $table->string('cuerpo',20);
            $table->string('estado',20);
            
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas');
    }
};
