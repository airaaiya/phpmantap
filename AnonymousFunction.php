<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("aiya");
$sayHello("aiwa");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("qian", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Eko", $filterFunction);

$firstName = "aira";
$lastName = "mahsyura";

$sayHelloEko = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloEko();

$firstName = "Budi";
$lastName = "Nugraha";
$sayHelloEko();
