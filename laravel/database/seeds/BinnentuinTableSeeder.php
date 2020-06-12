<?php

use Illuminate\Database\Seeder;

class BinnentuinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('binnentuin')->insert([
        'dag_van_week' => 'Maandag',
        'openingstijd' => '10:00',
        'sluitingstijd' => '18:00'
        ]);

        DB::table('binnentuin')->insert([
        'dag_van_week' => 'Dinsdag',
        'openingstijd' => '15:00',
        'sluitingstijd' => '19:00'
        ]);

        DB::table('binnentuin')->insert([
        'dag_van_week' => 'Woensdag',
        'openingstijd' => '15:00',
        'sluitingstijd' => '22:00'
        ]);

        DB::table('binnentuin')->insert([
        'dag_van_week' => 'Donderdag',
        'openingstijd' => '12:00',
        'sluitingstijd' => '20:00'
        ]);

        DB::table('binnentuin')->insert([
        'dag_van_week' => 'Vrijdag',
        'openingstijd' => '11:00',
        'sluitingstijd' => '23:00'
        ]);
    }
}
