<!DOCTYPE html>
<html>
<head>
    <title>Minutes to Seconds</title>
</head>
<body>

<h2>Minutes to Seconds</h2>

<?php
function convertToSeconds($minutes)
{
    return $minutes * 60;
}

$minutes = 5;
$seconds = convertToSeconds($minutes);

echo "Minutes: $minutes <br>";
echo "Seconds: $seconds";
?>

</body>
</html>