<?php

namespace Database\Seeders;
use App\Models\user;
use App\Models\Admin;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\Photo::factory(4)->create();
        User::factory()->count(2)->sequence(
        ['name' => 'Bebrik',
        'email' => 'bebra@gmail.com',
        'password' => bcrypt('bebrabebra'),
        'task' => ''
        ],['name' => 'extra',
           'email' => 'example@gmail.com',
           'password' => bcrypt('password'),
           'task' => ''
        ])->create();
    }
}
