<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatProfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_profil', function(Blueprint $table)
        {
            $table->id('id_profil');
            $table->integer('jumlah_client');
            $table->integer('tahun_operasi');
            $table->integer('jumlah_project');
            $table->integer('jumlah_team');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dat_profil');
    }
}
