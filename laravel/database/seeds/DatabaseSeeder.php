<?php

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
        $this->call([UsersTableSeeder::class]);
        $this->call([BinnentuinTableSeeder::class]);
        $this->call([TheRoofTableSeeder::class]);
        $this->call([ProductenTableSeeder::class]);
        $this->call([ReserveertijdenTableSeeder::class]);
        $this->call([PretestTableSeeder::class]);
        $this->call([BestellingenTableSeeder::class]);

    }
}
