<?php

namespace Database\Seeders;

use App\Models\Guru;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class GuruStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guru::insert([
            'nip_guru' => '1000000',
            'nama_guru' => 'Abey',
            'jabatan_guru' => 'Guru Mapel',
            'mapel_diampu_guru' => 'Pendidikan Kewarganegaraan',
            'jenis_kelamin_guru' => 'Setengah Perempuan',
            'biodata_guru' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam dolor excepturi est saepe aliquid, molestiae quas? Laborum magnam quis, voluptas iste error cupiditate, itaque, minima possimus similique natus quia veniam.',
        ]);
    }
}
