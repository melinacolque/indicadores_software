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
        Schema::create('modalidades_grad', function (Blueprint $table) {
            $table->bigIncrements('id_modalidad'); // Clave primaria auto-incremental
            $table->string('modalidad', 255); // Nombre de la modalidad
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modalidades_grad');
    }
};
