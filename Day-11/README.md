# 📘 Day 11: Form Handling Basics

### 🔑 Key Concepts Covered

* HTML Forms (input fields, POST method)
* `$_POST` superglobal
* `$_SERVER["REQUEST_METHOD"]`
* Input sanitization with `htmlspecialchars()`

---

## 📂 Files Created

* `exercise.php` → Task description with TODOs
* `solution.php` → Completed form handling solution

---

## 📝 Exercise (exercise.php)

1. Create a form with two fields: `name` and `email`.
2. Use **POST method**.
3. After submission, display:

   ```
   Hello, [name]! Your email is [email]
   ```
4. Use `htmlspecialchars()` to prevent XSS attacks.

---

## ✅ Solution (solution.php)

```php
<?php
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
```

---

## 🚀 Output Example

**Input:**

```
Name: Shiva
Email: shiva@example.com
```

**Output:**

```
Hello, Shiva!
Your email is: shiva@example.com
```

---

📅 **Progress:** Day 11 of 30 complete ✅
