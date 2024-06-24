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
        Schema::create('tipo_beca', function (Blueprint $table) {
            $table->bigIncrements('id_beca'); // Clave primaria auto-incremental
            $table->string('beca', 255); // Nombre de la beca
            $table->string('estado', 50)->nullable(); // Estado de la beca (opcional)
            $table->boolean('beca_completa')->default(false); // Beca completa (booleano)
            $table->boolean('beca_parcial')->default(false); // Beca parcial (booleano)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_beca');
    }
};
