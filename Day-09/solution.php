<?php
// Day 09: String Manipulation - Solution

$name = "Dasari Sambasiva Naidu";

// 1. Print the length
echo "Length: " . strlen($name) . PHP_EOL;

// 2. First 4 characters
echo "First 4 chars: " . substr($name, 0, 4) . PHP_EOL;

// 3. Uppercase and lowercase
echo "Uppercase: " . strtoupper($name) . PHP_EOL;
echo "Lowercase: " . strtolower($name) . PHP_EOL;

// 4. Replace a word
echo "Replace 'Naidu' with 'Garapati': " . str_replace("Naidu", "Garapati", $name) . PHP_EOL;

// 5. Reverse the string
echo "Reversed: " . strrev($name) . PHP_EOL;

// 6. Check substring
if (strpos($name, "Sambasiva") !== false) {
    echo "'Sambasiva' found in string" . PHP_EOL;
} else {
    echo "'Sambasiva' not found in string" . PHP_EOL;
}
