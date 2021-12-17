<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InformasiApp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_app', function(Blueprint $table)
        {
            $table->id('id_info');
            //$table->primary(['id_info']);
            $table->integer('jumlah_pengunjung_lihat');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasi_app');
    }
}
