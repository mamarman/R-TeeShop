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
        DB::table('users')->insert([
            [
                'firstname' => 'super',
                'lastname' => 'admin',
                'username' => 'superadmin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin@admin.com'),
            ]
        ]);
    }
}
