<?php

use App\User;
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
        User::create([
             'name' => 'Admin',
             'role_id' => 1,
             'photo_id' => 1,
             'email' => 'batdemberel_sh@yahoo.com',
             'password' => bcrypt('123456')
        ]);
    }
}
