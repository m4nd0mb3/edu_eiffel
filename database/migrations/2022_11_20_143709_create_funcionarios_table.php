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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
           
            $table->string('first_name')->nullable();
            $table->string('numero')->nullable();
            $table->string('second_name')->nullable();
            $table->string('bi')->nullable();
            $table->string('nif')->nullable();
            $table->string('idade')->nullable();
            $table->boolean('genero')->nullable();
            $table->integer('es_civil')->nullable();
            $table->dateTime('data_nasc')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('monicipio')->nullable();
            $table->string('provincia')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();

            $table->string('situacao')->nullable();
            $table->string('cargo')->nullable();
         
        
            $table->string('photo')->nullable();
            $table->string('bilhete')->nullable();
            $table->string('hl')->nullable();
            $table->string('cv')->nullable();
            $table->string('do')->nullable();
            $table->string('sdo')->nullable();
            $table->string('gm')->nullable();
    
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
        Schema::dropIfExists('funcionarios');
    }
};
