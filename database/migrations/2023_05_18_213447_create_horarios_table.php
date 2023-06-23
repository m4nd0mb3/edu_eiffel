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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classe')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('tempo')->references('id')->on('disciplinas')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('professor_id')->references('id')->on('professors')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('dia_id')->references('id')->on('dias')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
           
            //$table->string('dia')->nullable();
           
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
        Schema::dropIfExists('dias');
    }
};
