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
        Schema::create('d_marks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classe')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();

            $table->foreignId('mix_id')->references('disciplina_id')->on('mix_d_p_s')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();

            $table->string('nota')->nullable();
            $table->date('data')->nullable();
          
            $table->foreignId('tipo_id')->references('id')->on('typ__provas')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('estudante_id')->references('id')->on('estudantes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('professor_id')->references('id')->on('professors')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('d_marks');
    }
};
