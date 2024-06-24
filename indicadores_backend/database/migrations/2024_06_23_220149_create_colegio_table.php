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
        Schema::create('colegio', function (Blueprint $table) {
            $table->bigIncrements('id_colegio'); // Clave primaria
            $table->string('colegio', 255)->notNull(); // Nombre del colegio
            $table->unsignedBigInteger('id_tipo'); // ID del tipo de colegio
            $table->string('turno', 50)->notNull(); // Turno del colegio
            $table->string('area', 50)->notNull(); // Área del colegio
            $table->unsignedBigInteger('id_pais'); // Código del país
            $table->unsignedBigInteger('id_departamento'); // Código del departamento
            $table->unsignedBigInteger('id_provincia'); // Código de la provincia
            $table->unsignedBigInteger('id_localidad'); // Código de la localidad
            $table->unsignedBigInteger('id_cie'); // Código CIE
            $table->timestamps();
        });

        Schema::table('colegio', function (Blueprint $table) {
            $table->foreign('id_tipo')->references('id_tipo')->on('tipo_colegio')->onDelete('cascade');
            $table->foreign('id_pais')->references('id_pais')->on('pais')->onDelete('cascade');
            $table->foreign('id_departamento')->references('cod_dep')->on('departamento')->onDelete('cascade');
            $table->foreign('id_provincia')->references('cod_prov')->on('provincia')->onDelete('cascade');
            $table->foreign('id_localidad')->references('cod_loc')->on('localidad')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colegio');
    }
};
