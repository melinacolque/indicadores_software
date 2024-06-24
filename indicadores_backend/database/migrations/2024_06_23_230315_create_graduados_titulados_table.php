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
        Schema::create('graduados_titulados', function (Blueprint $table) {
            $table->bigIncrements('id_graduaccion'); // Clave primaria auto-incremental
            $table->unsignedBigInteger('id_alumno');
            $table->date('fecha_defensa');
            $table->time('hora_defensa');
            $table->string('titulo_tema');
            $table->unsignedBigInteger('id_modalidad');
            $table->integer('calificacion'); // Calificación en número
            $table->date('fecha_DA');
            $table->date('fecha_TPN');
            $table->string('grado_academico');
            $table->timestamps();
        });

        Schema::table('graduados_titulados', function (Blueprint $table) {
            $table->foreign('id_alumno')->references('id_alumno')->on('alumno')->onDelete('cascade');
            $table->foreign('id_modalidad')->references('id_modalidad')->on('modalidades_grad')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graduados_titulados');
    }
};
