<?php
// faker-sample5.csv
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('ja_JP');

$data = [];

for ($i = 0; $i < 10; $i++) {
    $data[] = [
        'name'     => $faker->name,            // 名前
        'zip'      => $faker->postcode,        // 郵便番号
        'pref'     => $faker->prefecture,      // 都道府県
        'city'     => $faker->city,            // 市
        'address'  => $faker->streetAddress,   // 住所
        'phone'    => $faker->phoneNumber,     // 電話番号
        'email'    => $faker->safeEmail,       // メール
        'birthday' => $faker->dateTimeBetween('-80 years', '-20years')
                            ->format('Y-m-d'), // 生年月日 (20〜80年前の日付)
        'score'    => $faker->numberBetween(1, 100), // 1〜100の数字
        'text'     => $faker->realText(20),    // ダミーテキスト 20文字
    ];
}

// CSV出力する
$fp = fopen('faker-sample5.csv', 'w');

foreach ($data as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
