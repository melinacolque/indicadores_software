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
        Schema::create('alum_programas', function (Blueprint $table) {
            $table->bigIncrements('id_programa'); // Clave primaria
            $table->string('programa', 255)->notNull(); // Nombre del programa
            $table->unsignedBigInteger('id_facultad'); // ID de la facultad
            $table->string('tipo', 50)->notNull(); // Tipo del programa
            $table->timestamps();
        });

        Schema::table('alum_programas', function (Blueprint $table) {
            $table->foreign('id_facultad')->references('id_facultad')->on('alum_programas_facultades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alum_programas');
    }
};
