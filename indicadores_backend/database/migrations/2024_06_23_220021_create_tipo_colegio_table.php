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
        Schema::create('tipo_colegio', function (Blueprint $table) {
            $table->bigIncrements('id_tipo'); // Clave primaria
            $table->string('tipo', 100)->notNull(); // Nombre del tipo de colegio
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_colegio');
    }
};
