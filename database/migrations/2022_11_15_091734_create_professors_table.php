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
        Schema::create('professors', function (Blueprint $table) {
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
         //   $table->string('liceu')->nullable();
            $table->string('situacao')->nullable();
            
            $table->foreignId('liceu')->references('id')->on('liceus')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
          
            $table->foreignId('classe_um')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('classe_dois')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('classe_tres')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('classe_quatro')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('classe_cinco')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('classe_seis')->references('id')->on('classes')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();


         
              
          //  $table->timestamp('email_verified_at')->nullable();

            $table->string('password');
            
            $table->string('photo')->nullable();
            $table->string('bilhete')->nullable();
            $table->string('hl')->nullable();
            $table->string('cv')->nullable();
            $table->string('do')->nullable();
            $table->string('sdo')->nullable();
            $table->string('gm')->nullable();
            $table->string('c_password')->nullable();

            $table->timestamp('current_sign_in_at')->nullable();
            $table->timestamp('last_sign_in_at')->nullable();
        //    $table->foreignId('disciplina_id')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('professors');
    }
};
