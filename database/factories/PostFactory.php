<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        
                 'title'=>$faker->name,
                 'content'=>$faker->sentence(50),
                 'user_id'=>random_int(1,3),



            ];
});
