<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimetableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $userid = 1;
        return [
            'userId' => $userid++,
            'name' => $this->faker->words(3, true)
        ];
    }
}
