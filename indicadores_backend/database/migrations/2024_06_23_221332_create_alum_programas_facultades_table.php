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
        Schema::create('alum_programas_facultades', function (Blueprint $table) {
            $table->bigIncrements('id_facultad'); // Clave primaria
            $table->string('facultad', 255)->notNull(); // Nombre de la facultad
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alum_programas_facultades');
    }
};
