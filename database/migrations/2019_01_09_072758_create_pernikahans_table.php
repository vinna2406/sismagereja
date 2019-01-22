<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePernikahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pernikahans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nama_pria');
            $table->string('tempat_lahir_pria');
            $table->date('tgllahir_pria');
            $table->string('nama_ayah_pria');
            $table->string('nama_ibu_pria');
            $table->string('nama_wanita');
            $table->string('tempat_lahir_wanita');
            $table->date('tgllahir_wanita');
            $table->string('nama_ayah_wanita');
            $table->string('nama_ibu_wanita');
            $table->date('tgl_pernikahan');
            $table->string('lokasi');
            $table->string('keterangan');
            $table->enum('status', ['aktif','nonaktif']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pernikahans');
    }
}
