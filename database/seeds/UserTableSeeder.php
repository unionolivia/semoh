<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'me',
            'email' => 'me@me.com',
            'phonenumber' => '090543456',
            'password' => bcrypt('123456789')
        ]);
    }
}
