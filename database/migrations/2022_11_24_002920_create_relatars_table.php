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
        Schema::create('relatars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estudante_id')->references('id')->on('estudantes')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('relato')->nullable();
            $table->string('tipo')->nullable();

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
        Schema::dropIfExists('relatars');
    }
};
