<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'comment'=>$this->faker->text(),
            'create_at'=>now(),
            'user_id'=>random_int(1, 25),
            'post_id'=>random_int(1,25),
            'enabled'=>true,
        ];
    }
}
