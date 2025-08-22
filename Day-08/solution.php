<?php
// Day-08: Array Functions - Solution

$numbers = [5, 10, 15, 20, 25];

echo "Original Array:\n";
print_r($numbers);

// Sort ascending
sort($numbers);
echo "\nSorted Ascending:\n";
print_r($numbers);

// Sort descending
rsort($numbers);
echo "\nSorted Descending:\n";
print_r($numbers);

// Search for element
if (in_array(15, $numbers)) {
    echo "\n15 exists in the array.\n";
} else {
    echo "\n15 does not exist.\n";
}

// Count elements
echo "\nTotal elements: " . count($numbers) . "\n";

// Remove last element
array_pop($numbers);
echo "\nArray after removing last element:\n";
print_r($numbers);
