<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminUserSeeder::class);
        $this->call(VisiMisiSeeder::class);
        $this->call(SejarahSingkatSeeder::class);
        $this->call(KompetensiKeahlianSeeder::class);
        $this->call(GuruStaffSeeder::class);
        $this->call(EkstrakurikulerSeeder::class);
        $this->call(KepalaSekolahSeeder::class);
        $this->call(CarouselSeeder::class);
        //$this->call(CarouselSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
