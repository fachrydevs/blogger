<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->paragraph(),
            'content' => fake()->paragraphs(3, true),
            'status' => fake()->randomElement(['Draft', 'Publish']),
            'thumbnail' => null,
            'user_id' => User::factory(),
        ];
    }
}