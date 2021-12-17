<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatProfilDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_profil_detail', function(Blueprint $table)
        {
            $table->id('id_detail');
            $table->integer('id_profil');
            $table->string('jenis_detail');
            $table->string('penjelasan');
     
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dat_profil_detail');
    }
}
