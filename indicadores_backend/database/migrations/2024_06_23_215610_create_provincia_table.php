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
        Schema::create('provincia', function (Blueprint $table) {
            $table->bigIncrements('cod_prov'); // Clave primaria
            $table->unsignedBigInteger('cod_dep'); // Código del departamento
            $table->string('provincia', 100)->notNull(); // Nombre de la provincia
            $table->timestamps();
        });

        Schema::table('provincia', function (Blueprint $table) {
            $table->foreign('cod_dep')->references('cod_dep')->on('departamento')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provincia');
    }
};
