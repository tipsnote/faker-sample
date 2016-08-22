<?php
// 日本語化する
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('ja_JP');

for ($i = 0; $i < 5; $i++) {
    echo $faker->name, PHP_EOL;
}
