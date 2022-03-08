<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->text(),
            'brief'=>$this->faker->text(),
            'content'=>$this->faker->text(),
            'create_at'=>now(),
            'category_id'=>random_int(2, 8),
            'user_id'=>random_int(1,25),
            'image'=>$this->faker->image(),
            'enabled'=>true,
        ];
    }
}
