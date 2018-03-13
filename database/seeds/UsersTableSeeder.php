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
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'john nabil',
                'email' => 'johnnabil85@gmail.com',
                'password' => bcrypt('john.nabil.!@!@'),
                'phone' => '01200839159',
                'role' => 'admin'
            ],
            [
                'name' => 'michael naguib',
                'email' => 'm.naguib@engineering-square.com',
                'password' => bcrypt('micael.naguib.!@!@'),
                'phone' => '01271917999',
                'role' => 'admin'
            ],
        ]);
    }
}
