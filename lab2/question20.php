<!DOCTYPE html>
<html>
<head>
    <title>First Three Characters</title>
</head>
<body>

<h2>Add First Three Characters</h2>

<form method="post">
    Enter a string:
    <input type="text" name="text" required>
    <br><br>

    <input type="submit" value="Create">
</form>

<?php

function addFirstThree($str) {

    $firstThree = substr($str, 0, 3);

    return $firstThree . $str . $firstThree;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $text = $_POST["text"];
    echo "<p>Input String: $text</p>";

    echo "<p>Result: " . addFirstThree($text) . "</p>";
}

?>

</body>
</html>