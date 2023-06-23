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
        Schema::create('mix_d_p_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professor_id')->references('id')->on('professors')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('disciplina_id')->references('id')->on('disciplinas')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();

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
        Schema::dropIfExists('mix_d_p_s');
    }
};
