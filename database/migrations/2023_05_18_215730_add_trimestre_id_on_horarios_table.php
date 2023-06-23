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
        Schema::table('horarios', function (Blueprint $table) {
            $table->foreignId('trimestre_id')->references('id')->on('trimestres')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coordenadors', function (Blueprint $table) {
            $table->dropColumn('current_sign_in_at');
            
        });
    }
};
