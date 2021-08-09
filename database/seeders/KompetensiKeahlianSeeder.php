<?php

namespace Database\Seeders;

use App\Models\KompetensiKeahlian;
use Illuminate\Database\Seeder;

class KompetensiKeahlianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KompetensiKeahlian::create([
            'nama_jurusan' => 'REKAYASA PERANGKAT LUNAK',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sunt tempore nam voluptate dolor alias doloribus nemo architecto autem minima rem, maxime non, porro magnam excepturi, cum reiciendis debitis consequuntur.',
            'sambutan_kepala_jurusan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam officiis eum excepturi, suscipit voluptatibus praesentium repellat rerum repellendus. Repellendus commodi eius ex quam at, cum sint velit in vel eum!',
        ]);

        KompetensiKeahlian::create([
            'nama_jurusan' => 'BISNIS DARING DAN PEMASARAN',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sunt tempore nam voluptate dolor alias doloribus nemo architecto autem minima rem, maxime non, porro magnam excepturi, cum reiciendis debitis consequuntur.',
            'sambutan_kepala_jurusan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam officiis eum excepturi, suscipit voluptatibus praesentium repellat rerum repellendus. Repellendus commodi eius ex quam at, cum sint velit in vel eum!',
        ]);

        KompetensiKeahlian::create([
            'nama_jurusan' => 'TEKNIK BISNIS SEPEDA MOTOR',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sunt tempore nam voluptate dolor alias doloribus nemo architecto autem minima rem, maxime non, porro magnam excepturi, cum reiciendis debitis consequuntur.',
            'sambutan_kepala_jurusan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam officiis eum excepturi, suscipit voluptatibus praesentium repellat rerum repellendus. Repellendus commodi eius ex quam at, cum sint velit in vel eum!',
        ]);

        KompetensiKeahlian::create([
            'nama_jurusan' => 'AKUNTANSI',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sunt tempore nam voluptate dolor alias doloribus nemo architecto autem minima rem, maxime non, porro magnam excepturi, cum reiciendis debitis consequuntur.',
            'sambutan_kepala_jurusan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam officiis eum excepturi, suscipit voluptatibus praesentium repellat rerum repellendus. Repellendus commodi eius ex quam at, cum sint velit in vel eum!',
        ]);

        KompetensiKeahlian::create([
            'nama_jurusan' => 'TEKNIK KENDARAAN RINGAN OTOMOTIF',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sunt tempore nam voluptate dolor alias doloribus nemo architecto autem minima rem, maxime non, porro magnam excepturi, cum reiciendis debitis consequuntur.',
            'sambutan_kepala_jurusan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam officiis eum excepturi, suscipit voluptatibus praesentium repellat rerum repellendus. Repellendus commodi eius ex quam at, cum sint velit in vel eum!',
        ]);
    }
}
