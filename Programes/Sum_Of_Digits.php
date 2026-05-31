<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Digits</title>
</head>
<body>
     <form  method="POST">
        <input type="text" name="number" placeholder="Enter a number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $sumOfDigits = 0;
        while ($number > 0) {
            $digit = $number % 10;
            $sumOfDigits += $digit;
            $number = (int)($number / 10);
        }
        echo "<p>Sum of digits: $sumOfDigits</p>";
    }
    ?>
</body>
</html>