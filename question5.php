<!DOCTYPE html>
<html>
<head>
    <title>Area of Triangle</title>
</head>
<body>

<?php
function triangleArea($base, $height)
{
    return ($base * $height) / 2;
}

$base = 10;
$height = 8;

echo "Base = $base <br>";
echo "Height = $height <br>";
echo "Area = " . triangleArea($base, $height);
?>

</body>
</html>