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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('editora');
            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('tb_generos')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ano_de_lancamento');
            $table->enum('estado', ['disponivel', 'reservado', 'alugado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
