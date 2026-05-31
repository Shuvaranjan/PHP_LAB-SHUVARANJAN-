<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST">
        <input type="text" name="number" placeholder="Enter a number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $originalNumber = $number;
        $reversedNumber = strrev($number);  

        if ($originalNumber === $reversedNumber) {
            echo "<p>$originalNumber is a palindrome number.</p>";
        } else {
            echo "<p>$originalNumber is not a palindrome number.</p>";
        }
    }
    ?>
</body>
</html>