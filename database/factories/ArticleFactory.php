<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'title' => $faker->sentence,
        'excerpt' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});

# how to use
// php artisan tinker
// Factory(App\Models\Article::class, 4)->create();

# to override fake values
// Factory(App\Models\Article::class)->create(['title' => 'Override Title']);