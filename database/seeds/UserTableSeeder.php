<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name'    => 'Eugene',
            'email'        => 'eugg1201@gmail.com',
            'password'     => bcrypt('12345678')
        ]);
    }
}
