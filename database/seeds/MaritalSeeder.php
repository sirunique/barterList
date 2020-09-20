<?php

use Illuminate\Database\Seeder;

class MaritalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\MaritalStatus::create([
            'status' => 'Married'
        ]);

        $user = App\MaritalStatus::create([
            'status' => 'Single'
        ]);
        $user = App\MaritalStatus::create([
            'status' => 'Divorce'
        ]);

        $user = App\MaritalStatus::create([
            'status' => 'Widow'
        ]);

        $user = App\MaritalStatus::create([
            'status' => 'Prefer not to say'
        ]);
    }
}
