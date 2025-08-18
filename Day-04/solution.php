<?php
// 1. Positive, Negative, Zero
$number = -5;

if ($number > 0) {
    echo "$number is Positive\n";
} elseif ($number < 0) {
    echo "$number is Negative\n";
} else {
    echo "$number is Zero\n";
}

// 2. Voting Eligibility
$age = 20;
if ($age >= 18) {
    echo "You are eligible to vote\n";
} else {
    echo "You are not eligible to vote\n";
}

// 3. Grading System
$marks = 72;

if ($marks >= 80) {
    echo "Grade: A\n";
} elseif ($marks >= 60) {
    echo "Grade: B\n";
} elseif ($marks >= 40) {
    echo "Grade: C\n";
} else {
    echo "Grade: Fail\n";
}

// 4. Day of the week using switch
$day = 3;

switch ($day) {
    case 1: echo "Monday\n"; break;
    case 2: echo "Tuesday\n"; break;
    case 3: echo "Wednesday\n"; break;
    case 4: echo "Thursday\n"; break;
    case 5: echo "Friday\n"; break;
    case 6: echo "Saturday\n"; break;
    case 7: echo "Sunday\n"; break;
    default: echo "Invalid day number\n";
}
