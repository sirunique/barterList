<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = App\User::create([
            'firstname' => 'Ibrahim',
            'slug' => 'Ibrahim',
            'lastname' => 'Hammed',
            'email' => 'ibroh24@gmail.com',
            'password' => bcrypt('password'),
            'avatar'=> 'images/defaultAvatar.png',
            'isadmin' => 1,
            'superadmin' => 1,
            'phone' => '07063543872',
            'country' => 'United States',
            'state' => 'Utah',
            'region' => 'Northeast',
            'address1' => '17, East Crescent,',
            'address2' => 'Geogia, USA',
            'city' => 'Salt Lake',
            'zip' => '84101',
            'facebook' => 'facebook.com/ibroh24',
            'twitter' => 'twitter.com/ibroh24',
            'whatsapp' => 'https://api.whatsapp.com/send?phone=07063543872',
            'taxid' => '84101qw',
            'gender' => 'male',
            'maritalstatus' => 'married',
            'description' => 'Am a simple man by nature :)',
            'paypal' => 'ibrahimhammed124@gmail.com',
        ]);

        $user = App\User::create([
            'firstname' => 'Demo',
            'slug' => 'demo',
            'lastname' => 'Bater',
            'email' => 'demo@barter.com',
            'password' => bcrypt('password'),
            'avatar'=> 'images/defaultAvatar.png',
            // 'isadmin' => ,
            // 'superadmin' => 1,
            'phone' => '07084929454',
            'country' => 'United States',
            'state' => 'Utah',
            'region' => 'Northeast',
            'address1' => '17, East Crescent,',
            'address2' => 'Geogia, USA',
            'city' => 'Salt Lake',
            'zip' => '84101',
            'facebook' => 'facebook.com/demo',
            'twitter' => 'twitter.com/demo',
            'whatsapp' => 'https://api.whatsapp.com/send?phone=07063543872',
            'taxid' => '84101qw',
            'gender' => 'male',
            'maritalstatus' => 'single',
            'description' => 'Am a simple man by nature',
            // 'paypal' => 'ibrahimhammed124@gmail.com',
        ]);

        $user = App\User::create([
            'firstname' => 'Ibrahim',
            'slug' => 'Ibrahim',
            'lastname' => 'Salami',
            'email' => 'highbee4u@gmail.com',
            'password' => bcrypt('password'),
            'avatar'=> 'images/defaultAvatar.png',
            // 'isadmin' => ,
            // 'superadmin' => 1,
            'phone' => '07066516088',
            'country' => 'United States',
            'state' => 'Utah',
            'region' => 'Northeast',
            'address1' => '17, East Crescent,',
            'address2' => 'Geogia, USA',
            'city' => 'Salt Lake',
            'zip' => '84101',
            // 'facebook' => 'facebook.com/demo',
            // 'twitter' => 'twitter.com/demo',
            'whatsapp' => 'https://api.whatsapp.com/send?phone=07066516088',
            'taxid' => '84101qw',
            'gender' => 'male',
            'maritalstatus' => 'single',
            'description' => 'Am a simple man by nature',
            // 'paypal' => 'ibrahimhammed124@gmail.com',
        ]);
    }
}
