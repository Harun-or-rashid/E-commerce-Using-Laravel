<?php

use Faker\Generator as Faker;

$factory->define(\App\product::class, function (Faker $faker) {
    return [

        'catagory_id'=>\App\catagory::all()->random()->id,
        'title'=>$faker->text(100),
        'description'=>$faker->realText(),
        'price'=>random_int(100,1000),
        'sale_price'=>random_int(0,1000),

    ];
});
