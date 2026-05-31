<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Prime Number</title>
</head>

<body>
    <form method="POST">
        <table>
            <tr>
                <td>Enter a number:</td>
                <td><input type="text" name="number"></td>
                <td colspan="2"><input type="submit" value="Check"></td>
            </tr>

        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if($number == ""){
            echo "<p>Please enter a number.</p>";
            exit;
        }
       elseif (is_numeric($number) && $number > 1) {
            $isPrime = true;
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                echo "<p>$number is a prime number.</p>";
            } else {
                echo "<p>$number is not a prime number.</p>";
            }
        } else {
            echo "<p>Please enter a valid number greater than 1.</p>";
        }
    }
   ?>


</body>

</html>