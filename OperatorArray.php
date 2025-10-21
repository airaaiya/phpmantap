<?php

$first = [
    "first_name" => "aira"
];

$last = [
    "first_name" => "aiya",
    "last_name" => "mahsyura"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Aira",
    "last_name" => "Mahsyura"
];

$b = [
    "last_name" => "Mahsyura",
    "first_name" => "Aira"
];

var_dump($a == $b);
var_dump($a === $b);