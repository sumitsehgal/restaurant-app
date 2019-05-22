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
        \App\User::create([
            'name' => 'Sumit Kumar',
            'email' => 'theprofessional1992@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
