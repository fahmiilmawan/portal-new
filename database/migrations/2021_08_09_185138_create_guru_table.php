<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nip_guru');
            $table->string('nama_guru');
            $table->string('foto_guru', 255);
            $table->string('jabatan_guru'); //jabatan termasuk staff dan guru mapel
            $table->string('mapel_diampu_guru', 255, null);
            $table->string('jenis_kelamin_guru', 100, null);
            $table->text('biodata_guru');
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
        Schema::dropIfExists('guru');
    }
}
