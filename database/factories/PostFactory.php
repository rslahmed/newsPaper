<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'category_id' => function(){ return \App\Category::all()->random(); },
        'subcategory_id' => function(){ return \App\SubCategory::all()->random(); },
        'author_name' => $faker->name,
        'featured_news' => $faker->numberBetween(0,1),
        'tag_id' => json_encode([1,2,3]),
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'image' => $faker->imageUrl(600,400),
        'image_caption' => $faker->name,
        'published' => $faker->numberBetween(0,1),
    ];
});
