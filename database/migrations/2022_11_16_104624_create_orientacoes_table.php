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
        Schema::create('orientacoes', function (Blueprint $table) {
            $table->id();
            //  $table->foreignId('turma')->references('id')->on('turmas')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
              $table->foreignId('classe')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
              $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
              $table->foreignId('disciplina')->references('id')->on('disciplinas')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
             
              $table->string('orientacao')->nullable();
              $table->string('link')->nullable();
              $table->string('ficheiro')->nullable();
             //  $table->foreignId('estudante_id')->references('id')->on('estudanteos')->constrained()->onUpdate('cascade')->onDelete('cascade');
               $table->foreignId('professor_id')->references('id')->on('professors')->constrained()->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::dropIfExists('orientacoes');
    }
};
