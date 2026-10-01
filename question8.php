<!DOCTYPE html>
<html>
<head>
    <title>Compare String Length</title>
</head>
<body>

<h2>Compare Two Strings</h2>

<form method="post">
    Enter First String:
    <input type="text" name="string1" required>
    <br><br>

    Enter Second String:
    <input type="text" name="string2" required>
    <br><br>

    <input type="submit" value="Compare">
</form>

<?php

function sameLength($str1, $str2) {
    return strlen($str1) == strlen($str2);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $string1 = $_POST["string1"];
    $string2 = $_POST["string2"];

    if (sameLength($string1, $string2)) {
        echo "<p>True: Both strings have the same number of characters.</p>";
    } else {
        echo "<p>False: Both strings have different number of characters.</p>";
    }
}

?>

</body>
</html>