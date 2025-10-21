<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("aira", "strtoupper");
sayHello("aira", "strtolower");
sayHello("aira", function (string $name): string {
    return strtoupper($name);
});
sayHello("aiya", fn($name) => strtoupper($name));