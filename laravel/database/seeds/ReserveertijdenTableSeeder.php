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
          'tijdsvak' => '12:00-12:30',
          'maxAantal' => 30
        ]);

        DB::table('reserveertijden')->insert([
          'tijdsvak' => '12:30-13:00',
          'maxAantal' => 30
        ]);

        DB::table('reserveertijden')->insert([
          'tijdsvak' => '13:00-13:30',
          'maxAantal' => 30
        ]);

        DB::table('reserveertijden')->insert([
          'tijdsvak' => '13:30-14:00',
          'maxAantal' => 30
        ]);

        DB::table('reserveertijden')->insert([
          'tijdsvak' => '14:00-14:30',
          'maxAantal' => 30
        ]);
    }
}
