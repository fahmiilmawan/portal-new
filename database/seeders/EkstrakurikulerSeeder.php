<?php

namespace Database\Seeders;

use App\Models\Ekstrakulikuler;
use Illuminate\Database\Seeder;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ekstrakulikuler::insert([
            'nama_ekstrakulikuler' => 'Pramuka',
            'keterangan_ekstrakulikuler' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, perferendis illum, vel obcaecati natus quia aliquam ex velit quam est et vero deserunt quas reprehenderit, cum iure iusto. Blanditiis, eveniet.',
        ]);
    }
}
