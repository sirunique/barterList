<?php

use Illuminate\Database\Seeder;

class ShippingTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\ShippingType::create([
            'shippingtype' => 'Fixed',
        ]);

        $user = App\ShippingType::create([
            'shippingtype' => 'Based on Destination',
        ]);
    }
}
