<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 10)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->text(mt_rand(40, 100)),
            'body' => '<p>' . implode('<p></p>' , $this->faker->paragraphs(mt_rand(20, 30))) . '</p>',
            'category_id' => mt_rand(1, 10),
        ];
    }
}
