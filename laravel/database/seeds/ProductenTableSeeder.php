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
      // Snacks
      DB::table('producten')->insert([
          'id' => 1,
          'naam' => 'Organic yoghurt',
          'beschrijving' => 'With granola and jam',
          'categorie' => 'snacks',
          'prijs' => 4,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 2,
          'naam' => 'Daily two',
          'beschrijving' => 'Pieces of fruit',
          'categorie' => 'snacks',
          'prijs' => 1.50,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 3,
          'naam' => 'Smoothie',
          'beschrijving' => 'With forest fruits and yoghurt',
          'categorie' => 'snacks',
          'prijs' => 3.50,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 4,
          'naam' => 'Breakfast cocktail',
          'beschrijving' => 'With oats mango & banana',
          'categorie' => 'snacks',
          'prijs' => 3.50,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 5,
          'naam' => 'Oat cookie',
          'beschrijving' => 'Homemade',
          'categorie' => 'snacks',
          'prijs' => 1.50,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 6,
          'naam' => 'Croissant',
          'beschrijving' => 'Freshly baked',
          'categorie' => 'snacks',
          'prijs' => 1,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 7,
          'naam' => 'Croissant',
          'beschrijving' => 'Freshly baked with butter & jam',
          'categorie' => 'snacks',
          'prijs' => 1.50,
          'locatie' => 'binnentuin'
      ]);

      // Salads
      DB::table('producten')->insert([
          'id' => 8,
          'naam' => 'The Goat',
          'beschrijving' => 'Grilled goat cheese, walnuts & honey',
          'categorie' => 'salads',
          'prijs' => 6,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 9,
          'naam' => 'California',
          'beschrijving' => 'Salmon & avocado',
          'categorie' => 'salads',
          'prijs' => 6,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 10,
          'naam' => 'Mista',
          'beschrijving' => 'Mozzarella & balsamic syrup',
          'categorie' => 'salads',
          'prijs' => 5.5,
          'locatie' => 'binnentuin'
      ]);

      // Toasts
      DB::table('producten')->insert([
          'id' => 11,
          'naam' => 'Mack & cheese',
          'beschrijving' => 'Mackerel melt toastie',
          'categorie' => 'toasts',
          'prijs' => 4.25,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 12,
          'naam' => 'Italian',
          'beschrijving' => 'With mozzarella, pesto & tomato',
          'categorie' => 'toasts',
          'prijs' => 4.25,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 13,
          'naam' => 'Classic cheese',
          'beschrijving' => 'Toasted cheese sandwitch',
          'categorie' => 'toasts',
          'prijs' => 3,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 14,
          'naam' => 'Avo on toast',
          'beschrijving' => 'With tomato, pumpkin seeds & parsley',
          'categorie' => 'toasts',
          'prijs' => 4.75,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 15,
          'naam' => 'Toasted banana bread',
          'beschrijving' => 'With yoghurt, walnuts & jam',
          'categorie' => 'toasts',
          'prijs' => 4.75,
          'locatie' => 'binnentuin'
      ]);

      // Sandwitches
      DB::table('producten')->insert([
          'id' => 16,
          'naam' => 'Caprese',
          'beschrijving' => 'With pesto, mozzarella, tomato & rocket',
          'categorie' => 'sandwitches',
          'prijs' => 3.75,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 17,
          'naam' => 'Salmon',
          'beschrijving' => 'Smoked ASC salmon with cream cheese',
          'categorie' => 'sandwitches',
          'prijs' => 4,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 18,
          'naam' => 'Mackerel',
          'beschrijving' => 'Homemade mackerel salad',
          'categorie' => 'sandwitches',
          'prijs' => 3.75,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 19,
          'naam' => 'Avo',
          'beschrijving' => 'Avocado, hummus, tomato & walnuts',
          'categorie' => 'sandwitches',
          'prijs' => 4,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 20,
          'naam' => 'Avo + another slice',
          'beschrijving' => 'Avocado, hummus, tomato & walnuts',
          'categorie' => 'sandwitches',
          'prijs' => 7,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 21,
          'naam' => 'Hummus',
          'beschrijving' => 'With tomato & lettuce',
          'categorie' => 'sandwitches',
          'prijs' => 3.5,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 22,
          'naam' => 'Gezond',
          'beschrijving' => 'Cheese & greens',
          'categorie' => 'sandwitches',
          'prijs' => 3.5,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 23,
          'naam' => 'Gezond + another slice',
          'beschrijving' => 'Cheese & greens',
          'categorie' => 'sandwitches',
          'prijs' => 6,
          'locatie' => 'binnentuin'
      ]);

      //Bagels
      DB::table('producten')->insert([
          'id' => 24,
          'naam' => 'Caprese',
          'beschrijving' => 'With pesto, mozzarella, tomato & rocket',
          'categorie' => 'bagels',
          'prijs' => 5,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 25,
          'naam' => 'Salmon',
          'beschrijving' => 'Smoked ASC salmon with cream cheese',
          'categorie' => 'bagels',
          'prijs' => 5.25,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 26,
          'naam' => 'Mackerel',
          'beschrijving' => 'Homemade mackerel salad',
          'categorie' => 'bagels',
          'prijs' => 5,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 27,
          'naam' => 'Avo',
          'beschrijving' => 'Avocado, hummus, tomato & walnuts',
          'categorie' => 'bagels',
          'prijs' => 5.25,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 28,
          'naam' => 'Avo + another slice',
          'beschrijving' => 'Avocado, hummus, tomato & walnuts',
          'categorie' => 'bagels',
          'prijs' => 8.25,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 29,
          'naam' => 'Hummus',
          'beschrijving' => 'With tomato & lettuce',
          'categorie' => 'bagels',
          'prijs' => 4.75,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 30,
          'naam' => 'Gezond',
          'beschrijving' => 'Cheese & greens',
          'categorie' => 'bagels',
          'prijs' => 4.75,
          'locatie' => 'binnentuin'
      ]);

      DB::table('producten')->insert([
          'id' => 31,
          'naam' => 'Gezond + another slice',
          'beschrijving' => 'Cheese & greens',
          'categorie' => 'bagels',
          'prijs' => 7.25,
          'locatie' => 'binnentuin'
      ]);
    }
}
