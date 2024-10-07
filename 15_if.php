<?php


$height = 91;

// if ($height === 91) {
//     echo '身長は' . $height . 'cmです';
// }else {
//     echo '身長は' . $height . 'cmではありません';
// }

// if ($height !== 90) {
//     echo '身長は90cmではありません';
// }

// データが入っているかどうか
// isset empty is_null

$test = '1';

if(!empty($test)) {
    echo '変数は空ではありません。';
}

$signal_1 = 'red';
$signal_2 = 'yellow';

if($signal_1 === 'red' || $signal_2 === 'blue'){
    echo '赤か青です';
}

// 三項演算子

$math = 80;

$comment = $math > 80 ?  'good' : 'not good';

echo $comment;



?>
