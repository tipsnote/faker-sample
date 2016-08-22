<?php
// 最初のサンプル
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

for ($i = 0; $i < 5; $i++) {
    echo $faker->name, PHP_EOL;
}
