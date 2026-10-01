<!DOCTYPE html>
<html>
<head>
    <title>Number of Cars</title>
</head>
<body>

<h2>Calculate Number of Cars</h2>

<form method="post">
    Enter number of people:
    <input type="number" name="people" min="1" required>
    <br><br>

    <input type="submit" value="Calculate">
</form>

<?php

function carsNeeded($people) {
    return ceil($people / 5);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $people = $_POST["people"];

    $cars = carsNeeded($people);
    echo "<p>Number of people = $people</p>";
    echo "<p>Number of cars needed = $cars</p>";
}

?>

</body>
</html>