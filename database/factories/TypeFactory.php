<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enums\Privacy;
use App\Models\Type;
use Faker\Generator as Faker;

$factory->define(type::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'src_back_rule' => 'nullable',
        'status' => $faker->boolean,
        'expiration_rule' => 'nulllable',
        'mimes' => $faker->mimeType,
        'disk' => 'local',
        'privacy' => new Privacy($faker->randomElement(Privacy::toArray())),
        'directory' => '/tmp',
    ];
});
