<?php

use Illuminate\Database\Seeder;

class ServiceTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\ServiceType::create([
            'servicetype' => 'product'
        ]);
        $user = App\ServiceType::create([
            'servicetype' => 'service'
        ]);
    }
}
