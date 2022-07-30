<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
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
            'date' => $this->faker->date(),
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraph,
            'user_id' => User::all()->random(),
        ];
    }

}
