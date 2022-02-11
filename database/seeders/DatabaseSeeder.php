<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Timetable;
use App\Models\TTElements;

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
        User::factory(10)->create();
        Timetable::factory(10)->create();
        TTElements::factory(30)->create();
    }
}
