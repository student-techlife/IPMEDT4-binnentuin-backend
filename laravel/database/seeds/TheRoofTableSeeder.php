<?php

use Illuminate\Database\Seeder;

class TheRoofTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theroof')->insert([
        'dag_van_week' => 'Maandag',
        'openingstijd' => '14:00',
        'sluitingstijd' => '21:00'
        ]);

        DB::table('theroof')->insert([
        'dag_van_week' => 'Dinsdag',
        'openingstijd' => '10:00',
        'sluitingstijd' => '22:00'
        ]);

        DB::table('theroof')->insert([
        'dag_van_week' => 'Woensdag',
        'openingstijd' => '18:00',
        'sluitingstijd' => '22:00'
        ]);

        DB::table('theroof')->insert([
        'dag_van_week' => 'Donderdag',
        'openingstijd' => '14:00',
        'sluitingstijd' => '23:00'
        ]);

        DB::table('theroof')->insert([
        'dag_van_week' => 'Vrijdag',
        'openingstijd' => '15:00',
        'sluitingstijd' => '19:00'
        ]);
    }
}
