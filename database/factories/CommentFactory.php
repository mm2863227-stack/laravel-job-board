<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class CommentFactory extends Factory
{
    protected $model = Comment::class;
    public function definition(): array
    {
        return [
             //'id' =>Str::uuid()->toString(),
             'post_id' =>Post::factory(),
            'content'=>$this->faker->realText,
            'author'=>$this->faker->name
        ];
    }
}
