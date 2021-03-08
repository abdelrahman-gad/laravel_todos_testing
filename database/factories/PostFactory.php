<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
         'title' =>  $faker->sentence(5),
         'content' => $faker->paragraphs(5 , true),
         'primary_image' => '/images/primary_image.jpg',
         'thumbnail_image' => '/images/primary_thumbnail.jpg',
         'slug' => $faker->sentence(4),
         'author' => $fake->name
    ];
});
