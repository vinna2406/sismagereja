<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaptisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baptis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anggota_id')->unsigned();
            $table->integer('pendeta_id')->unsigned();       
            $table->integer('user_id')->unsigned();
            $table->date('tgl_baptis');
            $table->string('keterangan');
            $table->enum('status', ['aktif','nonaktif']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pendeta_id')->references('id')->on('pendetas');
            $table->foreign('anggota_id')->references('id')->on('anggotas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baptis');
    }
}
