<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatInbox extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_inbox', function(Blueprint $table)
        {
            $table->id('id_inbox');
            $table->string('nama');
            $table->string('judul');
            $table->string('email');
            $table->string('pesan');
            $table->timestamp('create_date');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dat_inbox');
    }
}
