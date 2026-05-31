<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="number" placeholder="Enter a number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $factorial = 1; 
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i; 
        }
        echo "<p>Factorial of $number is: $factorial</p>";
    }
    ?>
</body>

</html>