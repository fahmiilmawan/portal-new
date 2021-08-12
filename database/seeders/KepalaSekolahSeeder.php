<?php

namespace Database\Seeders;

use App\Models\KepalaSekolahModel;
use App\Models\KepsekModel;
use Illuminate\Database\Seeder;

class KepalaSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KepsekModel::insert([
            'sambutan_kepsek' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam et commodi voluptatibus ipsa? Nisi quidem eum, molestiae optio velit deleniti magnam dolore? Labore consequatur harum eveniet ex sint voluptatem qui.',
        ]);
    }
}
