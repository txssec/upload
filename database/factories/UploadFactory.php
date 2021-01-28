<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enums\Status;
use App\Models\Upload;
use App\Models\Type;
use Faker\Generator as Faker;

$factory->define(Upload::class, function (Faker $faker) {
    return [
        'owner_type' => 'users',
        'owner_id' => $faker->randomDigit,
        'size' => $faker->randomDigit,
        'src_front' => $faker->file($sourceDir = '/file', $targetDir = '/file'),
        'src_back' => $faker->file($sourceDir = '/file', $targetDir = '/file'),
        'status' => new Status($faker->randomElement(Status::toArray())),
        'expiration' => $faker->dateTime(),
        'mime' => $faker->mimeType,
        'type_id' => function () {
            return factory(Type::class)->create()->id;
        },
        'origin' => 'factory',
        'approved_at' => $faker->dateTime(),
        'disapproved_at' => $faker->dateTime(),
        'disapproval_reason' => $faker->text(),
    ];
});
