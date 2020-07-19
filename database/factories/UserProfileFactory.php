<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserProfile;
use Faker\Generator as Faker;

$factory->define(UserProfile::class, function (Faker $faker) {
    return [
        
                'user_id'=>random_int(1, 5),

        'address'=>$faker->address,
        'photo'=>$faker->image,
        'phone'=>$faker->phonenumber,
    ];
});
