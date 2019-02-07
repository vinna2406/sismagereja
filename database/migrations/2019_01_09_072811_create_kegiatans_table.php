<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            // $table->integer('pendeta_id')->unsigned();
            $table->string('nama_kegiatan');
            $table->string('jenis_kegiatan');
            $table->date('tanggal');
            $table->string('nama_pendeta');
            $table->string('lokasi');
            $table->text('keterangan');
            $table->enum('status', ['aktif','nonaktif']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('pendeta_id')->references('id')->on('pendetas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatans');
    }
}
