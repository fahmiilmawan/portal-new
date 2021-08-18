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
            $table->enum('jabatan_guru',['Guru','Staff']); //jabatan termasuk staff dan guru mapel
            $table->string('mapel_diampu_guru', 255, null);
            $table->enum('jenis_kelamin_guru',['L','P']);
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
