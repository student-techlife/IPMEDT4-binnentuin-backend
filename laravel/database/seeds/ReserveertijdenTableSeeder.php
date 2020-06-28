<?php

use Illuminate\Database\Seeder;

class ReserveertijdenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reserveertijden')->insert([
          'openingstijd' => '12:00',
          'sluitingstijd' => '12:30',
          'max_aantal' => 30
        ]);

        DB::table('reserveertijden')->insert([
          'openingstijd' => '12:30',
          'sluitingstijd' => '13:00',
          'max_aantal' => 30
        ]);

        DB::table('reserveertijden')->insert([
          'openingstijd' => '13:00',
          'sluitingstijd' => '13:30',
          'max_aantal' => 30
        ]);

        DB::table('reserveertijden')->insert([
          'openingstijd' => '13:30',
          'sluitingstijd' => '14:00',
          'max_aantal' => 30
        ]);

        DB::table('reserveertijden')->insert([
          'openingstijd' => '14:00',
          'sluitingstijd' => '14:30',
          'max_aantal' => 30
        ]);
    }
}
