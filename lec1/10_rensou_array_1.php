<?php

$array_1 = ["あああ", 2, 3];

$array_2 = [
    ["赤", "青", "黄色"],
    ["白", "紫", "黒"]
];
// echo $array[0];

echo ('<pre>');
var_dump($array_2);
echo ('<pre>');

// echo $array_2[1][1];

$array_member = [
    'name' => "ホンダ",
    'height' => 170,
    'hobby' => 'サッカー'
];

echo $array_member['hobby'];
echo '<pre>';
var_dump($array_member);
echo '</pre>';

$array_member_2 = [
    'ホンダ' => [
        'height' => 170,
        'hobby' => "soccer"
    ],
    '香川' => [
        'height' => 165,
        'hobby' => 'soccer'
    ]
];

echo $array_member_2['香川']['height'];

echo '<pre>';
var_dump($array_member_2);
echo '</pre>';






?>
