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
        Schema::create('alumno', function (Blueprint $table) {
            $table->bigIncrements('id_alumno'); // Clave primaria
            $table->unsignedBigInteger('id_programa'); // ID del programa
            $table->string('id_ra'); // ID del registro académico
            $table->string('estado', 50)->notNull(); // Estado del alumno
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno');
    }
};
