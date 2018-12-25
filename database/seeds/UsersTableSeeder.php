<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'id' => '1',
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin'),
            ],
            [
                'id' => '2',
                'name' => 'instructor',
                'email' => 'instructor@example.com',
                'password' => bcrypt('instructor'),
            ], [
                'id' => '3',
                'name' => 'student',
                'email' => 'student@example.com',
                'password' => bcrypt('student'),
            ]
        ]);

    }
}
