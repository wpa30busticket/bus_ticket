<?php

use App\Seat;
use Faker\Generator as Faker;

$factory->define(App\Seat::class, function (Faker $faker) {
	static $x = 1;
    return [
        'bus_id' => 1,
        'seat_no' => $x++,
    ];
});
