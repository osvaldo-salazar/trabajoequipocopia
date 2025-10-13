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
        Schema::create('configuracion', function (Blueprint $table) {
            $table->id('idConfiguracion');
            $table->string('hero_home')->nullable(); 
            $table->boolean('section_matricula')->default(false);
            $table->boolean('section_semana_u')->default(false);
            $table->string('hero_quienes_somos')->nullable();
            $table->string('hero_noticias')->nullable(); 
            $table->string('logo_home')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuracion');
    }
};
