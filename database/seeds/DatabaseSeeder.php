<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(ServiceTypesSeeder::class);
        // $this->call(ShippingTypesSeeder::class);
        // $this->call(TradeStatusesSeeder::class);
        // $this->call(TradeTypesSeeder::class);
        // $this->call(GenderTableSeeder::class);
        // $this->call(MaritalSeeder::class);
        // $this->call(AdminsTableSeeder::class);
        $this->call(CategorySeeder::class);
    }
}
