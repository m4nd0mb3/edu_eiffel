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
        Schema::create('falta_secretarios', function (Blueprint $table) {
            $table->id();
            $table->date('data')->nullable();
            $table->string('tipo')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('secretario_id')->references('id')->on('secretarios')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();

            $table->foreignId('geral_id')->nullable();
          //  $table->foreignId('secretario_id')->nullable();
        
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
        Schema::dropIfExists('falta_secretarios');
    }
};
