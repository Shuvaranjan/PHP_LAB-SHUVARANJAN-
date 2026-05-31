<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Hexadecimal</title>
</head>
<body>
     <form  method="POST">
        <input type="text" name="number" placeholder="Enter a number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $decimalNumber = $_POST["number"];
        $hexadecimalNumber = dechex($decimalNumber);
        echo "<p>Hexadecimal equivalent of $decimalNumber is: $hexadecimalNumber</p>";
    }
    ?>
</body>
</html>