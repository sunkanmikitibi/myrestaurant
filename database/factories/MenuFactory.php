<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Menu::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(2, true),
        'price'=>$faker->numberBetween(99, 99999),
        'category_id'=> 1,
        'resto_id' => 1,
    ];
});
