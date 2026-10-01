<!DOCTYPE html>
<html>
<head>
    <title>Uppercase Last 3 Characters</title>
</head>
<body>

<h2>Convert Last 3 Characters</h2>

<form method="post">
    Enter String:
    <input type="text" name="text" required>
    <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $str = $_POST["text"];

    if (strlen($str) < 3) {
        $result = strtoupper($str);
    } else {
        $result = substr($str, 0, -3) . strtoupper(substr($str, -3));
    }
    echo "<p>Input String: $str</p>";
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>