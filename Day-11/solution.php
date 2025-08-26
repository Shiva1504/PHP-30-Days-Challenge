<?php
// Day 11: Form Handling Basics - Solution

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "Hello, $name!<br>";
    echo "Your email is: $email";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Handling</title>
</head>
<body>
    <h2>Enter Your Details</h2>
    <form method="POST" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
