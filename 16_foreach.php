<?php


$members_2 = [
    'ホンダ' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [ 
        'height'  => 165,
        'hobby' => 'サッカー'
    ]
];

// 多段階の配列
foreach ($members_2 as $member_1) {
    foreach($member_1 as $member => $value) {
        echo $member . 'は' . $value . 'です';
    };
}

?>