<?php
$food_names = ['名前' => '玉ねぎ','値段' => 200, '産地' => '北海道'];

// データに管理番号をつけ、順番に出力する
$num = 1;
foreach ($food_names as $index => $value) {
    echo "{$num} . {$index} : {$value}<br>";
    $num++;
}
?>