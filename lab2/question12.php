<!DOCTYPE html>
<html>
<head>
    <title>Find String Index</title>
</head>
<body>

<h2>Find Index</h2>

<form method="post">
    Enter names separated by comma:
    <input type="text" name="names" required>
    <br><br>

    Enter name to search:
    <input type="text" name="search" required>
    <br><br>

    <input type="submit" value="Find Index">
</form>

<?php

function findIndex($array, $string) {
    return array_search($string, $array);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $names = explode(",", $_POST["names"]);
    $search = $_POST["search"];

    $names = array_map("trim", $names);

    $index = findIndex($names, $search);

    if ($index !== false) {
        echo "<p>Index of $search = $index</p>";
    } else {
        echo "<p>String not found.</p>";
    }
}

?>

</body>
</html>