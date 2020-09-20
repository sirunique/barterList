<?php

use Illuminate\Database\Seeder;

class TradeStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\TradeStatus::create([
            'status' => 'Pending'
        ]);
        $user = App\TradeStatus::create([
            'status' => 'Accept'
        ]);
        $user = App\TradeStatus::create([
            'status' => 'Reject'
        ]);
    }
}
