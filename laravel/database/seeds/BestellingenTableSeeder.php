<?php

use Illuminate\Database\Seeder;

class BestellingenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bestellingen')->insert([
            'naam' => 'Henk',
            'email' => 'Henk@test.nl',
            'totaalPrijs' => '150',
            'status' => 'In behandeling'
        ]);
        DB::table('bestellingen')->insert([
            'naam' => 'Piet',
            'email' => 'Piet@test.nl',
            'totaalPrijs' => '75',
            'status' => 'In behandeling'
        ]);
    }
}
