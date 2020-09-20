<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\Category::create([
            'category' => 'Automobile'
        ]);
        $user = App\Category::create([
            'category' => 'Furniture'
        ]);
        $user = App\Category::create([
            'category' => 'Mobiles'
        ]);
        $user = App\Category::create([
            'category' => 'Truck'
        ]);
        $user = App\Category::create([
            'category' => 'Home Appliance'
        ]);
    }
}
