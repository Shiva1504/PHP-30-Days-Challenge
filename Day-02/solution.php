<?php

// Day 2: Data Types & Type Casting

// Variables of different data types
$stringVar = "Hello";
$intVar = 25;
$floatVar = 12.5;
$boolVar = true;

// Print with var_dump
var_dump($stringVar);
var_dump($intVar);
var_dump($floatVar);
var_dump($boolVar);

// Type casting
$stringNum = "100";
$floatNum = 12.56;
$intNum = 1;

echo (int)$stringNum . PHP_EOL;   // String to int
echo (int)$floatNum . PHP_EOL;    // Float to int
echo (bool)$intNum . PHP_EOL;     // Int to bool


?>