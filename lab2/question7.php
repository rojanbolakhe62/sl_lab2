<!DOCTYPE html>
<html>
<head>
    <title>Football Team Points</title>
</head>
<body>

<h2>Football Team Points Calculator</h2>

<?php
function calculatePoints($wins, $draws, $losses)
{
    return ($wins * 3) + ($draws * 1) + ($losses * 0);
}

$wins = $draws = $losses = 0;
$totalGames = $points = 0;
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $wins = (int)$_POST["wins"];
    $draws = (int)$_POST["draws"];
    $losses = (int)$_POST["losses"];

    if ($wins < 0 || $draws < 0 || $losses < 0) {
        $message = "Negative values are not allowed!";
    } else {
        $totalGames = $wins + $draws + $losses;
        $points = calculatePoints($wins, $draws, $losses);
    }
}
?>

<form method="post">
    Wins:
    <input type="number" name="wins" min="0" required><br><br>

    Draws:
    <input type="number" name="draws" min="0" required><br><br>

    Losses:
    <input type="number" name="losses" min="0" required><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($message != "") {
    echo "<p>$message</p>";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Result</h3>";
    echo "Wins: $wins <br>";
    echo "Draws: $draws <br>";
    echo "Losses: $losses <br><br>";
    echo "Total Games: $totalGames <br>";
    echo "Total Points: $points";
}
?>

</body>
</html>