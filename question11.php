<!DOCTYPE html>
<html>
<head>
    <title>Area of Shape</title>
</head>
<body>

<h2>Calculate Area</h2>

<form method="post">
    Base:
    <input type="number" name="base" step="0.01" required>
    <br><br>

    Height:
    <input type="number" name="height" step="0.01" required>
    <br><br>

    Shape:
    <select name="shape">
        <option value="triangle">Triangle</option>
        <option value="parallelogram">Parallelogram</option>
    </select>
    <br><br>

    <input type="submit" value="Calculate">
</form>

<?php

function area($base, $height, $shape) {

    if ($shape == "triangle") {
        return 0.5 * $base * $height;
    } elseif ($shape == "parallelogram") {
        return $base * $height;
    }

    return 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $base = $_POST["base"];
    $height = $_POST["height"];
    $shape = $_POST["shape"];

    $result = area($base, $height, $shape);

    echo "<p>Area of $shape = $result</p>";
}

?>

</body>
</html>