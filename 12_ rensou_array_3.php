<?php

$array_member_3 = [
    '1組' => [
        'ホンダ' => [
            'height' => 170,
            'hobby' => "soccer"
        ],
        '香川' => [
            'height' => 165,
            'hobby' => 'soccer'
        ]
    ],
    '2組' => [
        '長友' => [
            'height' => 160,
            'hobby' => 'soccer'
        ],
        '乾' => [
            'height' => 168,
            'hobby' => 'soccer'
        ]
    ]


];
echo $array_member_3['2組']['長友']['height'];
?>