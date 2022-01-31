<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
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
//        User::factory()->create();
//        User::create([
//            "name" => "Akash Yadav",
//            "email" => "akash.y@media.net",
//            "password" => encrypt("mediatest")
//        ]);

        Note::factory(10)->create();
    }
}
