<!DOCTYPE html>
<html>
<head>
    <title>Add If</title>
</head>
<body>

<h2>Add "if" to String</h2>

<form method="post">
    Enter a string:
    <input type="text" name="text" required>
    <br><br>

    <input type="submit" value="Check">
</form>

<?php

function addIf($str) {

    if (substr($str, 0, 2) == "if") {
        return $str;
    } else {
        return "if " . $str;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $text = $_POST["text"];

    echo "<p>Result: " . addIf($text) . "</p>";
}

?>

</body>
</html>