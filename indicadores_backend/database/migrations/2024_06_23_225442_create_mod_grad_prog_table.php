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
        Schema::create('mod_grad_prog', function (Blueprint $table) {
            
            $table->unsignedBigInteger('id_programa');
            $table->unsignedBigInteger('id_modalidad');
            $table->timestamps();

            $table->primary(['id_programa', 'id_modalidad']);
        });

        Schema::table('mod_grad_prog', function (Blueprint $table) {
            $table->foreign('id_programa')->references('id_programa')->on('alum_programas')->onDelete('cascade');
            $table->foreign('id_modalidad')->references('id_modalidad')->on('modalidades_grad')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mod_grad_prog');
    }
};
