<?php

use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\Gender::create([
            'gender' => 'Male'
        ]);

        $user = App\Gender::create([
            'gender' => 'Female'
        ]);
    }
}
