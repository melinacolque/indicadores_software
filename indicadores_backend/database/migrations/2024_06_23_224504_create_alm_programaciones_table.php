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
        Schema::create('alm_programaciones', function (Blueprint $table) {
            $table->bigIncrements('id'); // Clave primaria
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_gestion');
            $table->unsignedBigInteger('id_periodo');
            $table->unsignedBigInteger('id_materia');
            $table->unsignedInteger('grupo'); // Grupo como número
            $table->decimal('nota', 5, 2)->nullable(); // Nota con 2 decimales, opcional
            $table->decimal('nota_2da', 5, 2)->nullable(); // Nota de 2da oportunidad, opcional
            $table->timestamps();
        });

        Schema::table('alm_programaciones', function (Blueprint $table) {
            $table->foreign('id_alumno')->references('id_alumno')->on('alumno')->onDelete('cascade');
            $table->foreign('id_gestion')->references('id_gestion')->on('gestion')->onDelete('cascade');
            $table->foreign('id_periodo')->references('id_periodo')->on('periodo')->onDelete('cascade');
            $table->foreign('id_materia')->references('id_materia')->on('pln_materias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alm_programaciones');
    }
};
