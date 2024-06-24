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
        Schema::create('localidad', function (Blueprint $table) {
            $table->bigIncrements('cod_loc'); // Clave primaria
            $table->unsignedBigInteger('cod_dep'); // Código del departamento
            $table->unsignedBigInteger('cod_prov'); // Código de la provincia
            $table->string('localidad', 100)->notNull(); // Nombre de la localidad
            $table->timestamps();
        });

        Schema::table('localidad', function (Blueprint $table) {
            $table->foreign('cod_dep')->references('cod_dep')->on('departamento')->onDelete('cascade');
            $table->foreign('cod_prov')->references('cod_prov')->on('provincia')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localidad');
    }
};
