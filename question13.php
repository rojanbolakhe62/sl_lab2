<!DOCTYPE html>
<html>
<head>
    <title>Array Value</title>
</head>
<body>

<h2>Find Array Value</h2>

<form method="post">
    Enter values separated by comma:
    <input type="text" name="values" required>
    <br><br>

    Enter index:
    <input type="number" name="index" min="0" required>
    <br><br>

    <input type="submit" value="Find Value">
</form>

<?php

function getValue($array, $index) {
    return $array[$index];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $values = explode(",", $_POST["values"]);
    $index = $_POST["index"];

    if (isset($values[$index])) {
        echo "<p>Value at index $index = " . trim($values[$index]) . "</p>";
    } else {
        echo "<p>Invalid index.</p>";
    }
}

?>

</body>
</html>