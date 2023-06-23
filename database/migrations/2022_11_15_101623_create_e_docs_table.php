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
        Schema::create('e_docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estudante_id')->references('id')->on('estudantes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('tipo_id')->references('id')->on('type__e_docs')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();


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
        Schema::dropIfExists('e_docs');
    }
};
