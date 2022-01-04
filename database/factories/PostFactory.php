<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

          'title' => $this->faker->text('40'),
          'slug' => Str::of($this->faker->text('40'))->slug('-'),
          'content' => $this->faker->paragraphs(10, true),
        ];
    }
}
