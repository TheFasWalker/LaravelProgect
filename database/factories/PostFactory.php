<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {
        return [
            'title'=>$this->faker->word(),
            'content'=>$this->faker->realText(100),
            'image'=>$this->faker->imageUrl(),
            'is_published'=>rand(0,1) == 1,
            'category_id'=>Category::get()->random()->id,
            
        ];
    }
}
