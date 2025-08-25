<?php
// Day 10: Superglobals Basics - Solution

// Example: Using $_GET
if (isset($_GET['name'])) {
    echo "Hello, " . htmlspecialchars($_GET['name']) . "! (from GET)<br>";
}

// Example: Using $_POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST['username'] ?? 'Guest';
    echo "Hello, " . htmlspecialchars($user) . "! (from POST)<br>";
}

// Example: Using $_SERVER
echo "<br>Server Info:<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "PHP Self: " . $_SERVER['PHP_SELF'] . "<br>";
?>

<!-- Simple HTML Form -->
<form method="get" action="">
    <label>Enter Name (GET):</label>
    <input type="text" name="name">
    <button type="submit">Submit GET</button>
</form>

<form method="post" action="">
    <label>Enter Username (POST):</label>
    <input type="text" name="username">
    <button type="submit">Submit POST</button>
</form>
