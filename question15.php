<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Integers</title>
</head>
<body>

<h2>Calculate Sum</h2>

<form method="post">
    Enter first number:
    <input type="number" name="num1" required>
    <br><br>

    Enter second number:
    <input type="number" name="num2" required>
    <br><br>

    <input type="submit" value="Calculate">
</form>

<?php

function calculateSum($a, $b) {

    if ($a == $b) {
        return 3 * ($a + $b);
    } else {
        return $a + $b;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $result = calculateSum($num1, $num2);
    echo "<p>sum of $num1 and $num2</p>";
    echo "<p>Result = $result</p>";
}

?>
-
</body>
</html>