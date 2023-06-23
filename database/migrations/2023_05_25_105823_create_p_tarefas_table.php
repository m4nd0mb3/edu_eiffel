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
        Schema::create('p_tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->text('descricao')->nullable();
            $table->dateTime('data_tempo')->nullable();
            $table->string('tipo')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('classe')->references('id')->on('classes')->nullable();
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
        Schema::dropIfExists('p_tarefas');
    }
};
