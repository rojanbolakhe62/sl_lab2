<!DOCTYPE html>
<html>
<head>
    <title>Last Character</title>
</head>
<body>

<h2>Add Last Character</h2>

<form method="post">
    Enter a string:
    <input type="text" name="text" required>
    <br><br>

    <input type="submit" value="Create">
</form>

<?php

function addLastChar($str) {

    $lastChar = substr($str, -1);

    return $lastChar . $str . $lastChar;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $text = $_POST["text"];
    echo "<p>Input String: $text</p>";
    echo "<p>Result: " . addLastChar($text) . "</p>";
}

?>

</body>
</html>