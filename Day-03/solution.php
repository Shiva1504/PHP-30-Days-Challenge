<?php
// Day 3: Operators & Expressions

$a = 10;
$b = 3;

// Arithmetic
echo "a + b = " . ($a + $b) . "\n";
echo "a - b = " . ($a - $b) . "\n";
echo "a * b = " . ($a * $b) . "\n";
echo "a / b = " . ($a / $b) . "\n";
echo "a % b = " . ($a % $b) . "\n";
echo "a ** b = " . ($a ** $b) . "\n";

// Comparison
echo "a == b? " . var_export($a == $b, true) . "\n";
echo "a != b? " . var_export($a != $b, true) . "\n";
echo "a > b? " . var_export($a > $b, true) . "\n";

// Logical
$isPositive = $a > 0;
$isEven = $a % 2 == 0;
echo "Is a positive AND even? " . var_export($isPositive && $isEven, true) . "\n";

// Assignment
$a += 5;
echo "After a += 5, a = $a\n";

$b *= 2;
echo "After b *= 2, b = $b\n";
