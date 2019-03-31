<?php

use Faker\Generator as Faker;

$factory->define(\App\catagory::class, function (Faker $faker) {
    return [
      'name'=>$faker->colorName,
        'banner'=>$faker->imageUrl(),

    ];
});
