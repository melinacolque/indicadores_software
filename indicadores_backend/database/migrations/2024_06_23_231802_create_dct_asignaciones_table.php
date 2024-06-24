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
        Schema::create('dct_asignaciones', function (Blueprint $table) {
            $table->string('id_docente', 255);
            $table->integer('id_gestion');
            $table->unsignedBigInteger('id_periodo');
            $table->unsignedBigInteger('id_materia');
            $table->unsignedBigInteger('id_grupo');
            $table->string('id_programa');
           

            // Definir clave primaria compuesta
            $table->primary(['id_docente', 'id_gestion', 'id_periodo', 'id_materia', 'id_grupo', 'id_programa']);
        });

        Schema::table('dct_asignaciones', function (Blueprint $table) {
            // Agregar claves foráneas
            $table->foreign('id_docente')->references('id_docente')->on('docente')->onDelete('cascade');
            $table->foreign('id_gestion')->references('id_gestion')->on('gestion')->onDelete('cascade');
            $table->foreign('id_periodo')->references('id_periodo')->on('periodo')->onDelete('cascade');
            $table->foreign('id_materia')->references('id_materia')->on('materia')->onDelete('cascade');
            $table->foreign('id_grupo')->references('id_grupo')->on('grupo')->onDelete('cascade');
            $table->foreign('id_programa')->references('id_programa')->on('programa')->onDelete('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dct_asignaciones');
    }
};
