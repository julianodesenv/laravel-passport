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
        factory(\App\User::class)->create([
            'email' => 'user1@julianodesenv.com.br'
        ]);
        factory(\App\User::class)->create([
            'email' => 'user2@julianodesenv.com.br'
        ]);
    }
}
