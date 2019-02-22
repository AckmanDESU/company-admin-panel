<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company . ' ' . $faker->companySuffix,
        'email' => $faker->unique()->safeEmail,
        /* 'logo' => $faker->file($sourceDir = './tmp', $targetDir = './public/storage'), */
        'logo' => $faker->image('./public/storage', 100, 100, 'cats', false),
        'website' => 'http://' . $faker->domainName,
    ];
});
