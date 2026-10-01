<!DOCTYPE html>
<html>
<head>
    <title>String Length Using Recursion</title>
</head>
<body>

<h2>Find Length of String</h2>

<form method="post">
    Enter a string:
    <input type="text" name="text" required>
    <br><br>

    <input type="submit" value="Find Length">
</form>

<?php

function stringLength($str) {

    if ($str == "") {
        return 0;
    }

    return 1 + stringLength(substr($str, 1));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $text = $_POST["text"];

    $length = stringLength($text);

    echo "<p>String: $text</p>";
    echo "<p>Length: $length</p>";
}

?>

</body>
</html>