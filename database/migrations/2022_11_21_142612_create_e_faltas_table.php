<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_faltas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
          //  $table->foreignId('turma')->references('id')->on('turmas')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('classe')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('disciplina')->references('id')->on('disciplinas')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
             $table->foreignId('estudante_id')->references('id')->on('estudantes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('secretaria_id')->nullable();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e_faltas');
    }
};
