<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Ivan Penev',
            'email' => 'ivan.penev92@gmail.com',
            'password' => '$2y$12$oEx4qS8frrU5tixn3dZXSuHdP5vIV2DQM2JZ4prAjpYHF8my5A4nC', 
            'remember_token' => ''
        ]);

    }
}