<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Numbers</title>
</head>
<body>

<h2>Sum of Two Numbers</h2>

<?php
function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}

$a = 10;
$b = 20;
$sum = addNumbers($a, $b);

echo "First Number: $a <br>";
echo "Second Number: $b <br>";
echo "Sum: $sum";
?>

</body>
</html>