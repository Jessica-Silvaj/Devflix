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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('resumo');
            $table->integer('duracao');
            $table->year('ano');
            $table->enum('classificacao',['L - livre', '10 anos', '12 anos', '14 anos', '16 anos', '18 anos'])->default('L - Livre');
            $table->timestamps();
            $table->foreignId('categoria_id')->constrained()->on('categorias');
            $table->string('url')->nullable();
            $table->string('fotoCapa')->nullable();
            $table->string('palavraChave')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
