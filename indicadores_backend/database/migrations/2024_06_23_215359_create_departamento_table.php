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
        Schema::create('departamento', function (Blueprint $table) {
            $table->bigIncrements('cod_dep'); // Clave primaria
            $table->string('departamento', 100)->notNull(); // Nombre del departamento
            $table->unsignedBigInteger('cod_pais'); // Código del país
            $table->timestamps();
        });

        Schema::table('departamento', function (Blueprint $table) {
            $table->foreign('cod_pais')->references('id_pais')->on('pais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departamento');
    }
};
