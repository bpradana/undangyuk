<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DesignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(1, 100),
            'rating' => $this->faker->numberBetween(1, 5),
            'product_img' => $this->faker->image('public/assets/img',640,480, null, false)
        ];
    }
}
