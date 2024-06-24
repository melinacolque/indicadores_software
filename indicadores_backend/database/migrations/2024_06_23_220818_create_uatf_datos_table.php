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
        Schema::create('uatf_datos', function (Blueprint $table) {
            $table->string('nro_dip')->primary();
            $table->string('id_ra')->unique();
            $table->string('paterno', 50);
            $table->string('materno', 50);
            $table->string('nombres', 100);
            $table->string('id_sexo', 10);
            $table->string('nac_pais', 100);
            $table->integer('id_dep');
            $table->integer('id_prov');
            $table->integer('id_loc');
            $table->unsignedBigInteger('id_colegio')->nullable();
            $table->integer('fec_nacimiento');
            $table->string('tel_per')->nullable(); // Permitir valores nulos
            $table->string('estado_civil', 50);
            $table->string('email', 50)->nullable();
            
        });

        Schema::table('uatf_datos', function (Blueprint $table) {
            $table->foreign('id_colegio')->references('id_colegio')->on('colegio')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uatf_datos');
    }
};
