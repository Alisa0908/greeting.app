<?php

$profile = [
    'name' => 'Tom',
    'age' => 21,
    'staff' => ['Tom', 'Ken']

];

$profile['age'] = 22;

$profile[] = '末尾に追加';
// 連想配列だと,追加しないほうがいい｡配列になってしまうから｡

$profile['staff'][] = 'John';

var_dump($profile);
