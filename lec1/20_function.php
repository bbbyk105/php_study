<?php

function test(){
    echo 'テスト';
};

test();


$comment = 1;

function getComment($string){
    echo $string;
}

getComment($comment);


function getNumberOfComment(){
    return 5;
}

echo getNumberOfComment();


function sumPrice($int1, $int2){
    $int3 = $int1 + $int2;
    return $int3;
}

$total = sumPrice(3,5);

echo $total;


?>