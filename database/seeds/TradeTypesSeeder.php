<?php

use Illuminate\Database\Seeder;

class TradeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\TradeType::create([
            'type' => 'Trade'
        ]);
        $user = App\TradeType::create([
            'type' => 'Buy'
        ]);
    }
}
