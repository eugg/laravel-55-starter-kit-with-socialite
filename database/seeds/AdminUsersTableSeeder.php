<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$wIoFi7MugDywIyXDY3CKfOw9NiQfyTH5JpyOQZkiaWF4ocJ2jFjl6',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2017-11-09 08:28:47',
                'updated_at' => '2017-11-09 08:28:47',
            ),
        ));
        
        
    }
}