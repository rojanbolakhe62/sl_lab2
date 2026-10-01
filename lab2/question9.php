<!DOCTYPE html>
<html>
<head>
    <title>Divisible by 5</title>
</head>
<body>

<h2>Check Divisibility by 5</h2>

<form method="post">
    Enter an integer:
    <input type="number" name="number" required>
    <br><br>

    <input type="submit" value="Check">
</form>

<?php

function divisibleByFive($num) {
    return $num % 5 == 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number = $_POST["number"];

    if (divisibleByFive($number)) {
        echo "<p>True: $number is evenly divisible by 5.</p>";
    } else {
        echo "<p>False: $number is not evenly divisible by 5.</p>";
    }
}

?>

</body>
</html>