<?php
$person =[
    'age' => 33,
    'haircolor' => 'black',
    'career' => 'web developer'
];

$person['name'] = 'Thando';

unset($person['age']);

echo '<pre>';
die(var_dump($person));
echo '</pre>';



require 'index.view.php';