<!DOCTYPE html>
<html>
<head>
    <title>Four Copies</title>
</head>
<body>

<h2>Four Copies of First Two Characters</h2>

<form method="post">
    Enter a string:
    <input type="text" name="text" required>
    <br><br>

    <input type="submit" value="Create">
</form>

<?php

function fourCopies($str) {

    if (strlen($str) < 2) {
        return $str;
    }

    $firstTwo = substr($str, 0, 2);

    return $firstTwo . $firstTwo . $firstTwo . $firstTwo;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $text = $_POST["text"];
    echo "<p>Input String: $text</p>";
    echo "<p>Result: " . fourCopies($text) . "</p>";
}

?>

</body>
</html>