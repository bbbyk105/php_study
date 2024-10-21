<?php

function validation($request)
{

    $errors = [];

    if (empty($request['your_name']) || 20 < mb_strlen($request['your_name'])) {
        $errors[] = '氏名は必須です。20文字以内で入力してください。';
    }

    if (empty($request['your_name']) || 200 < mb_strlen($request['your_name'])) {
        $errors[] = 'お問い合わせ内容は必須です。200文字以内で入力してください。';
    }

    return $errors;
}

?>
