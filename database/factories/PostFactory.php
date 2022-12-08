<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class; 

    public function definition()
    {
        $categoryID = Category::pluck('id')->toArry();
        $userID     = User::pluck('id')->toArry();

        return [
            'title'       => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'user_id'     => $userID[array_rand($userID)],
            'category_id' => $categoryID[array_rand($categoryID)]
        ];
    }
}
