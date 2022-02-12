<?php

namespace Database\Seeders;

use App\Models\Styles;
use App\Models\User;
use App\Models\Timetable;
use App\Models\TTElements;
use App\Models\Note;

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
        Note::factory(50)->create();
        Timetable::factory(10)->create();
        TTElements::factory(30)->create();
        Styles::factory(20)->create();
    }
}
