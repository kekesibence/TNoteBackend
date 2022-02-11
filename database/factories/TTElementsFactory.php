<?php

namespace Database\Factories;

use App\Models\Timetable;
use Illuminate\Database\Eloquent\Factories\Factory;

class TTElementsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ttid' => Timetable::all()->random(),
            'day' => $this->faker->dayOfWeek(),
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->text(50),
            'start' => $this->faker->time(),
            'end' => $this->faker->time(),
            'repeating' => $this->faker->boolean()
        ];
    }
}
