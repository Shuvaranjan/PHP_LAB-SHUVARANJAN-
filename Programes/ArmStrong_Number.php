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
        $sumOfCubes = 0;
        while ($number > 0) {
            $digit = $number % 10; 
            $sumOfCubes += $digit ** 3; 
            $number = (int)($number / 10); 
        }
        if ($sumOfCubes == $originalNumber) {
            echo "<p>$originalNumber is an Armstrong number.</p>";
        } else {
            echo "<p>$originalNumber is not an Armstrong number.</p>";
        }
    }
    ?>
</body>
</html>