<?php

use Illuminate\Database\Seeder;

class PollutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pollutions')->insert([
            'name' => 'Air Pollution',
        ]);
        DB::table('pollutions')->insert([
            'name' => 'Noise Pollution',
        ]);
        DB::table('pollutions')->insert([
            'name' => 'Soil Pollution',
        ]);
        DB::table('pollutions')->insert([
            'name' => 'Water Pollution',
        ]);
    }
}
