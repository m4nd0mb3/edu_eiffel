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
        Schema::create('relogios', function (Blueprint $table) {
            $table->id();
            $table->dateTime('datetime')->nullable();
            $table->dateTime('date')->nullable();
            $table->time('time')->nullable();
            $table->string('direction')->nullable();
            $table->string('devicename')->nullable();
            $table->string('devicenumber')->nullable();
            $table->string('personname')->nullable();
            $table->string('cardnumber')->nullable();
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
        Schema::dropIfExists('relogios');
    }
};
