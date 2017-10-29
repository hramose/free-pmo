<?php

use App\Entities\Partners\Partner;
use App\Entities\Payments\Payment;
use App\Entities\Projects\Project;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {

    return [
        'project_id'  => function () {
            return factory(Project::class)->create()->id;
        },
        'amount'      => 10000,
        'in_out'      => 1,
        'type_id'     => rand(1, 3),
        'date'        => $faker->dateTimeBetween('-1 year', '-1 month')->format('Y-m-d'),
        'description' => $faker->paragraph,
        'partner_id'  => function () {
            return factory(Partner::class)->create()->id;
        },
    ];
});