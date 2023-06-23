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
        Schema::create('admissaos', function (Blueprint $table) {
            $table->id();
            $table->string('name');     
            $table->string('email')->nullable();
            $table->string('numero')->nullable();
            $table->string('second_name')->nullable();
            $table->string('bi')->nullable();
            $table->string('idade')->nullable();
            $table->boolean('genero')->nullable();
            $table->dateTime('data_nasc')->nullable();
            $table->dateTime('data_emissao')->nullable();
            $table->dateTime('data_cad')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('lugar_nasc')->nullable();
            $table->string('provincia')->nullable();
            $table->string('name_father')->nullable();
            $table->string('visita')->nullable();
            $table->string('num_father')->nullable();
            $table->string('name_mather')->nullable();
            $table->string('nome_enc')->nullable();
            $table->string('num_mather')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('photo')->nullable();
            $table->string('cer')->nullable();
            $table->string('bilhete')->nullable();
            $table->string('portador')->nullable();
            $table->string('visual')->nullable();
            $table->string('mental')->nullable();
            $table->string('fisico')->nullable();
            $table->string('psicologico')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('admissaos');
    }
};
