<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'url' => $this->faker->url,
            'content' => $this->faker->paragraph,
            'type' => $this->faker->randomElement(['Web Design', 'Graphic Design']),
            'user_id' => User::all()->random(),
        ];
    }

}
