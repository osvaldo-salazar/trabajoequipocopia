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
        Schema::create('categoria_noticia', function (Blueprint $table) {
            $table->id('idCategoriaNoticia');
            $table->foreignId('idNoticia')->constrained('noticias', 'idNoticia')->onDelete('cascade');
            $table->foreignId('idCategoria')->constrained('categorias', 'idCategoria')->onDelete('cascade');
            $table->timestamps();
            
            $table->unique(['idNoticia', 'idCategoria']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_noticias');
    }
};
