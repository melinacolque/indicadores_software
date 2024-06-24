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
        Schema::create('becas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_gestion');
            $table->unsignedBigInteger('id_periodo');
            $table->unsignedBigInteger('id_beca');

            $table->primary(['id_alumno', 'id_gestion', 'id_periodo', 'id_beca']);
        });

        Schema::table('becas', function (Blueprint $table) {
            $table->foreign('id_alumno')->references('id_alumno')->on('alumno')->onDelete('cascade');
            $table->foreign('id_gestion')->references('id_gestion')->on('gestion')->onDelete('cascade');
            $table->foreign('id_periodo')->references('id_periodo')->on('periodo')->onDelete('cascade');
            $table->foreign('id_beca')->references('id_beca')->on('tipo_beca')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('becas');
    }
};
