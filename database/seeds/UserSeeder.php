<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Badri Yusron A',
            'username' => 'badriysha',
            'email' => 'badriysha@gmail.com',
            'password' => bcrypt('Gmail2015...')
        ]);
        $admin->assignRole('ADMIN');

        $user = User::create([
            'name' => 'User Test',
            'username' => 'utest',
            'email' => 'test@gmail.com',
            'password' => bcrypt('Gmail2015...')
        ]);
        $user->assignRole('USER');
    }
}
