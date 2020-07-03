<?php

use Illuminate\Database\Seeder;

class PretestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pretests')->insert([
            'name' => 'Bassie',
            'persons' => 5,
            'reservation_time' => '12:30 - 13:00',
            'symptoms' => false,
        ]);
        DB::table('pretests')->insert([
            'name' => 'Adriaan',
            'persons' => 2,
            'reservation_time' => '12:30 - 13:00',
            'symptoms' => true,
        ]);
    }
}
