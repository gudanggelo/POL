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
             'name' =>'Admin',
             'email' =>'admin@admin.com',
             'user'=> 0,
             'admin'=> 1,
             'password'=> bcrypt('11111111'),
         ]);

        DB::table('users')->insert([
        'name' =>'Users',
        'email' =>'user@user.com',
        'user'=> 1,
        'admin'=> 0,
        'password'=> bcrypt('11111111'),
    ]);
    }
}
