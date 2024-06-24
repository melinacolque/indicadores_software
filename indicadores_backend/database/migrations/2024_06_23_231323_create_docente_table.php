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
        Schema::create('docente', function (Blueprint $table) {
            $table->string('id_docente', 255)->primary(); // Clave primaria
            $table->string('ci', 15)->notNull(); // Campo CI
            $table->string('paterno', 50)->nullable(); // Apellido paterno
            $table->string('materno', 50)->nullable(); // Apellido materno
            $table->string('nombres', 100)->nullable(); // Nombres
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docente');
    }
};
