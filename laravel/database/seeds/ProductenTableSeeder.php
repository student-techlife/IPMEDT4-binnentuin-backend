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
          'locatie' => 'binnentuin',
          'img' => 'https://www.forkknifeswoon.com/wp-content/uploads/2016/05/Img0058-Fork_Knife_Swoon_Roasted_Strawberry_Yogurt_Breakfast_Bowls_with_Chocolate_Coconut_Granola2.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 2,
          'naam' => 'Daily two',
          'beschrijving' => 'Pieces of fruit',
          'categorie' => 'snacks',
          'prijs' => 1.50,
          'locatie' => 'binnentuin',
          'img' => 'https://www.abelandcole.co.uk/media/422_14530_z.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 3,
          'naam' => 'Smoothie',
          'beschrijving' => 'With forest fruits and yoghurt',
          'categorie' => 'snacks',
          'prijs' => 3.50,
          'locatie' => 'binnentuin',
          'img' => 'https://i1.wp.com/www.cakesandpumps.com/wp-content/uploads/2015/04/smoothie-with-forest-fruit.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 4,
          'naam' => 'Breakfast cocktail',
          'beschrijving' => 'With oats mango & banana',
          'categorie' => 'snacks',
          'prijs' => 3.50,
          'locatie' => 'binnentuin',
          'img' => 'https://www.cookitrealgood.com/wp-content/uploads/2018/09/bananaoat8.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 5,
          'naam' => 'Oat cookie',
          'beschrijving' => 'Homemade',
          'categorie' => 'snacks',
          'prijs' => 1.50,
          'locatie' => 'binnentuin',
          'img' => 'https://cdn.sallysbakingaddiction.com/wp-content/uploads/2014/07/oatmeal-raisin-cookies-3.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 6,
          'naam' => 'Croissant',
          'beschrijving' => 'Freshly baked',
          'categorie' => 'snacks',
          'prijs' => 1,
          'locatie' => 'binnentuin',
          'img' => 'https://www.okokorecepten.nl/i/recepten/kookboeken/2009/kook-ook-brood/zelfgebakken-croissants-600.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 7,
          'naam' => 'Croissant',
          'beschrijving' => 'Freshly baked with butter & jam',
          'categorie' => 'snacks',
          'prijs' => 1.50,
          'locatie' => 'binnentuin',
          'img' => 'https://lh3.googleusercontent.com/proxy/atYK8M3QsSjCYCBEO6R4mWGWDEyJnHbPI103C7GEw5aiwbDaQR5W6SQXYFOsC8sEUn1osyvUOKFN-6wj62p0FhRUrJl2B96L3WP3WJMCk1Tn2rW1DQSwUSEycwSmHZpzB214U57wLQY2'
      ]);

      // Salads
      DB::table('producten')->insert([
          'id' => 8,
          'naam' => 'The Goat',
          'beschrijving' => 'Grilled goat cheese, walnuts & honey',
          'categorie' => 'salads',
          'prijs' => 6,
          'locatie' => 'binnentuin',
          'img' => 'https://keyassets-p2.timeincuk.net/wp/prod/wp-content/uploads/sites/50/2014/07/beetroot-salad.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 9,
          'naam' => 'California',
          'beschrijving' => 'Salmon & avocado',
          'categorie' => 'salads',
          'prijs' => 6,
          'locatie' => 'binnentuin',
          'img' => 'https://i.pinimg.com/originals/b3/32/58/b33258a49c5ae301361af0351f1c29b0.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 10,
          'naam' => 'Mista',
          'beschrijving' => 'Mozzarella & balsamic syrup',
          'categorie' => 'salads',
          'prijs' => 5.5,
          'locatie' => 'binnentuin',
          'img' => 'https://i.pinimg.com/originals/3a/fd/39/3afd39f764689fa943ae4aa1994ddc4a.jpg'
      ]);

      // Toasts
      DB::table('producten')->insert([
          'id' => 11,
          'naam' => 'Mack & cheese',
          'beschrijving' => 'Mackerel melt toastie',
          'categorie' => 'toasts',
          'prijs' => 4.25,
          'locatie' => 'binnentuin',
          'img' => 'https://d2v9mhsiek5lbq.cloudfront.net/eyJidWNrZXQiOiJsb21hLW1lZGlhLXVrIiwia2V5IjoiZm9vZG5ldHdvcmstaW1hZ2UtZTk2MGU4ZjQtOTM4NC00M2Q0LThmODUtZTA0YmQxZDRlMzgzLmpwZWciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjE5MjAsImhlaWdodCI6MTA4MCwiZml0IjoiY292ZXIifX19'
      ]);

      DB::table('producten')->insert([
          'id' => 12,
          'naam' => 'Italian',
          'beschrijving' => 'With mozzarella, pesto & tomato',
          'categorie' => 'toasts',
          'prijs' => 4.25,
          'locatie' => 'binnentuin',
          'img' => 'https://cms.splendidtable.org/sites/default/files/styles/w2000/public/174228975.jpg?itok=9UwvV49U'
      ]);

      DB::table('producten')->insert([
          'id' => 13,
          'naam' => 'Classic cheese',
          'beschrijving' => 'Toasted cheese sandwitch',
          'categorie' => 'toasts',
          'prijs' => 3,
          'locatie' => 'binnentuin',
          'img' => 'https://thecookful.com/wp-content/uploads/2019/05/how-to-grilled-cheese-1392-x780.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 14,
          'naam' => 'Avo on toast',
          'beschrijving' => 'With tomato, pumpkin seeds & parsley',
          'categorie' => 'toasts',
          'prijs' => 4.75,
          'locatie' => 'binnentuin',
          'img' => 'https://www.vibrantplate.com/wp-content/uploads/2018/03/Avocado-toast-01-683x1024.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 15,
          'naam' => 'Toasted banana bread',
          'beschrijving' => 'With yoghurt, walnuts & jam',
          'categorie' => 'toasts',
          'prijs' => 4.75,
          'locatie' => 'binnentuin',
          'img' => 'https://uprootkitchen.com/wp-content/uploads/2016/02/You-can-eat-this-Whole-Wheat-Yogurt-Quick-Bread-plain-or-toast-it-and-top-it-with-your-favorite-jam-or-nut-butter.-uprootkitchen.com_.jpg'
      ]);

      // Sandwitches
      DB::table('producten')->insert([
          'id' => 16,
          'naam' => 'Caprese',
          'beschrijving' => 'With pesto, mozzarella, tomato & rocket',
          'categorie' => 'sandwitches',
          'prijs' => 3.75,
          'locatie' => 'binnentuin',
          'img' => 'https://www.thespruceeats.com/thmb/_xxHqmfl8OvM3mkGVSOEzxN7YTE=/2400x2400/smart/filters:no_upscale()/classic-italian-caprese-sandwich-recipe-4107018-hero-01-5c28eb76c9e77c0001152456.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 17,
          'naam' => 'Salmon',
          'beschrijving' => 'Smoked ASC salmon with cream cheese',
          'categorie' => 'sandwitches',
          'prijs' => 4,
          'locatie' => 'binnentuin',
          'img' => 'https://www.simplyrecipes.com/wp-content/uploads/2012/03/salmon-lemon-cream-sauce-vertical-a-1600.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 18,
          'naam' => 'Mackerel',
          'beschrijving' => 'Homemade mackerel salad',
          'categorie' => 'sandwitches',
          'prijs' => 3.75,
          'locatie' => 'binnentuin',
          'img' => 'https://144f2a3a2f948f23fc61-ca525f0a2beaec3e91ca498facd51f15.ssl.cf3.rackcdn.com/uploads/food_portal_data/recipes/recipe/hero_article_image/1292/letterbox_resizeimage593x426xIH24yLOg9w.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 19,
          'naam' => 'Avo',
          'beschrijving' => 'Avocado, hummus, tomato & walnuts',
          'categorie' => 'sandwitches',
          'prijs' => 4,
          'locatie' => 'binnentuin',
          'img' => ''
      ]);

      DB::table('producten')->insert([
          'id' => 20,
          'naam' => 'Avo + another slice',
          'beschrijving' => 'Avocado, hummus, tomato & walnuts',
          'categorie' => 'sandwitches',
          'prijs' => 7,
          'locatie' => 'binnentuin',
          'img' => 'https://ml2g0rsda5na.i.optimole.com/w:690/h:593/q:auto/http://healthydelicacies.com/wp-content/uploads/2017/03/DSC_1123_2-copy.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 21,
          'naam' => 'Hummus',
          'beschrijving' => 'With tomato & lettuce',
          'categorie' => 'sandwitches',
          'prijs' => 3.5,
          'locatie' => 'binnentuin',
          'img' => 'https://www.whereyougetyourprotein.com/wp-content/uploads/2016/06/DSC_1089_2-2-copy.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 22,
          'naam' => 'Gezond',
          'beschrijving' => 'Cheese & greens',
          'categorie' => 'sandwitches',
          'prijs' => 3.5,
          'locatie' => 'binnentuin',
          'img' => 'https://lh3.googleusercontent.com/proxy/3t8Ui_TxUGCDAZhiWPXQFXzP79wNAgyAkvhgJ-pjXrLIX6DTYy5QT9bvYJdxkYyaFA-rBNMYZWQaRvHk894iQY2xPRShvhbi-BZV86WDmMChJeInctUi0MWW7CEabE--oknGBmBukux8XqMAHC6370O32ShRKQ0'
      ]);

      DB::table('producten')->insert([
          'id' => 23,
          'naam' => 'Gezond + another slice',
          'beschrijving' => 'Cheese & greens',
          'categorie' => 'sandwitches',
          'prijs' => 6,
          'locatie' => 'binnentuin',
          'img' => 'https://www.snixykitchen.com/wp-content/uploads/2018/04/Spring-Green-Pancetta-Grilled-Cheese-1-2-1-720x720.jpg'
      ]);

      //Bagels
      DB::table('producten')->insert([
          'id' => 24,
          'naam' => 'Caprese',
          'beschrijving' => 'With pesto, mozzarella, tomato & rocket',
          'categorie' => 'bagels',
          'prijs' => 5,
          'locatie' => 'binnentuin',
          'img' => 'https://www.lekkerensimpel.com/wp-content/uploads/2016/10/IMG_7962.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 25,
          'naam' => 'Salmon',
          'beschrijving' => 'Smoked ASC salmon with cream cheese',
          'categorie' => 'bagels',
          'prijs' => 5.25,
          'locatie' => 'binnentuin',
          'img' => 'https://i.pinimg.com/originals/82/1b/0f/821b0ff74c7ee26c4882e954a6f2686e.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 26,
          'naam' => 'Mackerel',
          'beschrijving' => 'Homemade mackerel salad',
          'categorie' => 'bagels',
          'prijs' => 5,
          'locatie' => 'binnentuin',
          'img' => 'https://pbs.twimg.com/media/DD5lrY2WAAYgEu4.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 27,
          'naam' => 'Avo',
          'beschrijving' => 'Avocado, hummus, tomato & walnuts',
          'categorie' => 'bagels',
          'prijs' => 5.25,
          'locatie' => 'binnentuin',
          'img' => 'https://fitforrestofyourlife.files.wordpress.com/2014/08/2a70502d4695cfe20a43a581b4150090.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 28,
          'naam' => 'Avo + another slice',
          'beschrijving' => 'Avocado, hummus, tomato & walnuts',
          'categorie' => 'bagels',
          'prijs' => 8.25,
          'locatie' => 'binnentuin',
          'img' => 'https://www.veganricha.com/wp-content/uploads/2016/03/avocado-bagel-2393.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 29,
          'naam' => 'Hummus',
          'beschrijving' => 'With tomato & lettuce',
          'categorie' => 'bagels',
          'prijs' => 4.75,
          'locatie' => 'binnentuin',
          'img' => 'https://i.pinimg.com/originals/e2/8e/59/e28e59663ff5e21224075d10fc231d42.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 30,
          'naam' => 'Gezond',
          'beschrijving' => 'Cheese & greens',
          'categorie' => 'bagels',
          'prijs' => 4.75,
          'locatie' => 'binnentuin',
          'img' => 'https://layersofhappiness.com/wp-content/uploads/2014/08/the-works-bagel-3.jpg'
      ]);

      DB::table('producten')->insert([
          'id' => 31,
          'naam' => 'Gezond + another slice',
          'beschrijving' => 'Cheese & greens',
          'categorie' => 'bagels',
          'prijs' => 7.25,
          'locatie' => 'binnentuin',
          'img' => 'https://healthyhappylife.com/wp-content/uploads/2015/05/2015_05_24_bagel-pizzas-vegan_9999_104bagel-pizzas-lemon-vegan1212700vegan.png'
      ]);
    }
}
