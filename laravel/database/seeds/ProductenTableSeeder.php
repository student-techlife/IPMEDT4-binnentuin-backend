<?php

use Illuminate\Database\Seeder;

class ProductenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('producten')->insert([
          'id' => 1,
          'naam' => 'organic yoghurt',
          'beschrijving' => 'width granola and jam',
          'categorie' => 'snacks',
          'prijs' => 4,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 2,
          'naam' => 'Daily two',
          'beschrijving' => 'pieces of fruit',
          'categorie' => 'snacks',
          'prijs' => 1.50,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 3,
          'naam' => 'The Goat',
          'beschrijving' => 'grilled goat cheese wallnuts & honey',
          'categorie' => 'salads',
          'prijs' => 6,
          'locatie' => 'binnentuin'
      ]);
    }
}
