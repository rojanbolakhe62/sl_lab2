<!DOCTYPE html>
<html>
<head>
    <title>Area of Circle</title>
</head>
<body>

<form method="post">
    Radius:
    <input type="number" name="radius" step="0.01" required>
    <input type="submit" value="Calculate">
</form>

<?php
define("PI", 3.1416);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $radius = $_POST["radius"];
    $area = PI * $radius * $radius;

    echo "<h3>Area of Circle = $area</h3>";
}
?>

</body>
</html>