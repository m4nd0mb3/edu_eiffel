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
        Schema::create('notificacao_a_s', function (Blueprint $table) {
            $table->id();
            $table->date('data')->nullable();
            $table->string('mensagem')->nullable();
            $table->string('tipo')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('administrativo_id')->references('id')->on('administrativos')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();

          //  $table->foreignId('administrativo_id');
            $table->foreignId('geral_id')->nullable();
        
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
        Schema::dropIfExists('notificacao_a_s');
    }
};
