<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary to Decimal</title>
</head>
<body>
     <form  method="POST">
        <input type="text" name="number" placeholder="Enter a number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $binaryNumber = $_POST["number"];
        $decimalNumber = bindec($binaryNumber);
        echo "<p>Decimal equivalent of $binaryNumber is: $decimalNumber</p>";
    }
    ?>
</body>
</html>