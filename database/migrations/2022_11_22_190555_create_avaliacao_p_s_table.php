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
        Schema::create('avaliacao_p_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professor_id')->references('id')->on('professors')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('nivel')->nullable();
            $table->string('cif')->nullable();
            $table->string('agente')->nullable();
            $table->string('data_avalicao')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();

            $table->string('qualidade')->nullable();
            $table->string('aperfeicoamento')->nullable();
            $table->string('inovacao')->nullable();
            $table->string('responsabilidade')->nullable();
            $table->string('relacoes')->nullable();
            $table->string('actividade')->nullable();
            $table->string('pontuacao')->nullable();
            $table->string('avalicao')->nullable();

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
        Schema::dropIfExists('avaliacao_p_s');
    }
};
