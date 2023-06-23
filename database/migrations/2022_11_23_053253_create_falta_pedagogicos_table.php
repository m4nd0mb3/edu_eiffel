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
        Schema::create('falta_pedagogicos', function (Blueprint $table) {
            $table->id();
            $table->string('data')->nullable();
            $table->string('tipo_falta')->nullable();
        //    $table->foreignId('classe')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
        //    $table->foreignId('disciplina')->references('id')->on('disciplinas')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
         
            $table->foreignId('pedagogia_id')->references('id')->on('pedagogias')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('falta_pedagogicos');
    }
};
