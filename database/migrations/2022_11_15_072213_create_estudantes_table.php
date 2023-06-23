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
        Schema::create('estudantes', function (Blueprint $table) {
            $table->id();
            $table->string('name');     
            $table->string('email')->unique();
            $table->string('numero')->nullable();
            $table->string('second_name')->nullable();
            $table->string('bi')->nullable();
            $table->string('nif')->nullable();
            $table->string('idade')->nullable();
            $table->boolean('genero')->nullable();
            $table->dateTime('data_nasc')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('monicipio')->nullable();
            $table->string('provincia')->nullable();
            $table->string('name_father')->nullable();
            $table->string('email_father')->nullable();
            $table->string('num_father')->nullable();
            $table->string('name_mather')->nullable();
            $table->string('email_mather')->nullable();
            $table->string('num_mather')->nullable();
            $table->foreignId('turma')->references('id')->on('turmas')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('classe')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('photo')->nullable();
            $table->string('cer')->nullable();
            $table->string('bilhete')->nullable();
            $table->string('c_password')->nullable();
            $table->string('password');
            $table->timestamp('current_sign_in_at')->nullable();
            $table->timestamp('last_sign_in_at')->nullable();
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
        Schema::dropIfExists('estudantes');
    }
};
