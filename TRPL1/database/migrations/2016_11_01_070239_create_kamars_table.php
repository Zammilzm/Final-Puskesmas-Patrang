<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('kamars', function(Blueprint $table){
            $table->increments('id_kamar');
            $table->unsignedInteger('id_pegawai');
            $table->string('nama_kamar',50);
            $table->string('jenis_kamar',50);
            $table->integer('no_kamar');
            $table->integer('tarif_kamar');
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
        Schema::drop('kamars');
    }
}
