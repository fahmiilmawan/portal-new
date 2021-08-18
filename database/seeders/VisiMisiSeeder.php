<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visimisi;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Visimisi::create([
          'visi'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum minus laboriosam minima corporis! Maiores, blanditiis sequi laudantium excepturi eius aperiam itaque, iste cum ad ducimus ut ipsum illum, labore quas!',
          'misi'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum minus laboriosam minima corporis! Maiores, blanditiis sequi laudantium excepturi eius aperiam itaque, iste cum ad ducimus ut ipsum illum, labore quas!' 
      ]);  
    }
}
