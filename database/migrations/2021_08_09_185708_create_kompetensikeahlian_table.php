<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKompetensikeahlianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetensikeahlian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_jurusan', 255);
            $table->string('logo_jurusan', 255);
            $table->text('keterangan');
            $table->string('foto_kepala_jurusan', 255);
            $table->text('sambutan_kepala_jurusan');
            $table->string('foto_kegiatan_jurusan');
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
        Schema::dropIfExists('kompetensikeahlian');
    }
}
