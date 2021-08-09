<?php

namespace Database\Seeders;

use App\Models\SejarahSingkat;
use Illuminate\Database\Seeder;

class SejarahSingkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SejarahSingkat::create([
            'sejarah_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam excepturi consequatur dolorum atque rerum! Dolorum amet nobis illo optio facilis consequuntur explicabo, nostrum fugit similique assumenda eius ratione nesciunt aut'
        ]);
    }
}
