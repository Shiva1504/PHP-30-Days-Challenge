<?php
// Day 5: Loops in PHP 🔄

// 1. Print numbers from 1 to 10 using a for loop
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo PHP_EOL;

// 2. Print even numbers from 1 to 20 using a while loop
$i = 2;
while ($i <= 20) {
    echo $i . " ";
    $i += 2;
}
echo PHP_EOL;

// 3. Print numbers from 1 to 5 using a do-while loop
$j = 1;
do {
    echo $j . " ";
    $j++;
} while ($j <= 5);
echo PHP_EOL;

// 4. Loop through an array of fruits and print each using foreach
$fruits = ["Apple", "Banana", "Orange", "Mango"];
foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}
