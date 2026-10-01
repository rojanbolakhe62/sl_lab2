<!DOCTYPE html>
<html>
<head>
    <title>Age in Days</title>
</head>
<body>

<h2>Age in Days</h2>

<?php
function ageInDays($years)
{
    return $years * 365;
}

$age = 20;

echo "Age in Years: $age <br>";
echo "Age in Days: " . ageInDays($age);
?>

</body>
</html>