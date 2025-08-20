<?php
// Day 6: Functions in PHP 🧩

// 1. Function greet()
function greet() {
    echo "Hello, PHP!" . PHP_EOL;
}
greet();

// 2. Function add($a, $b)
function add($a, $b) {
    return $a + $b;
}
echo "Sum: " . add(10, 5) . PHP_EOL;

// 3. Function multiply($a, $b = 5)
function multiply($a, $b = 5) {
    return $a * $b;
}
echo "Product: " . multiply(10) . PHP_EOL; // default b=5

// 4. Function isEven($n)
function isEven($n) {
    return $n % 2 === 0;
}
echo "7 is " . (isEven(7) ? "Even" : "Odd") . PHP_EOL;
echo "10 is " . (isEven(10) ? "Even" : "Odd") . PHP_EOL;
