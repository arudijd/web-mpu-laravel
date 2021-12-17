<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dashboard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboard', function(Blueprint $table)
        {
            $table->id('id_dashboard');
            $table->string('penj_mpu');
            $table->string('penj_produk_app');
            $table->string('penj_produk_non');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dashboard');
    }
}
