<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRujukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rujukans', function (Blueprint $table) {
                                   $table->increments('id_rujukan');
           $table->unsignedInteger('id_pelayanan');
           $table->date('tanggal_rujukan');
           $table->string('keterangan');
           $table->string('tempat_rujukan');
           $table->string('status_rujukan');
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
        Schema::drop('rujukans');
    }
}
