<?php
// Day 7 - Arrays in PHP (Solutions)

// Indexed array
$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];
echo "Fruits: " . implode(", ", $fruits) . "\n";

// Associative array
$student = [
    "name" => "Siva",
    "age" => 22,
    "grade" => "A"
];
echo "Student Info: " . print_r($student, true) . "\n";

// Add new fruit
$fruits[] = "Pineapple";
echo "Updated Fruits: " . implode(", ", $fruits) . "\n";

// Print only keys
echo "Student Keys: " . implode(", ", array_keys($student)) . "\n";

// Loop through fruits
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit\n";
}
?>
