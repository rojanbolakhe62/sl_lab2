<!DOCTYPE html>
<html>
<head>
    <title>Absolute Difference</title>
</head>
<body>

<h2>Find Absolute Difference</h2>

<form method="post">
    Enter value of n:
    <input type="number" name="n" required>
    <br><br>

    <input type="submit" value="Calculate">
</form>

<?php

function calculateDifference($n) {

    $difference = abs($n - 51);

    if ($n > 51) {
        return 3 * $difference;
    } else {
        return $difference;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = $_POST["n"];

    $result = calculateDifference($n);

    echo "<p>Result = $result</p>";
}

?>

</body>
</html>