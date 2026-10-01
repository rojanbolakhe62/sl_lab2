<?php
$si = "";

if(isset($_POST['calculate'])){
    $p = $_POST['principal'];
    $r = $_POST['rate'];
    $t = $_POST['time'];

    $si = ($p * $r * $t) / 100;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest</title>
</head>
<body>

<h2>Simple Interest Calculator</h2>

<form method="post">

Principal:
<input type="number" name="principal" required><br><br>

Rate (%):
<input type="number" step="0.01" name="rate" required><br><br>

Time (Years):
<input type="number" step="0.01" name="time" required><br><br>

<input type="submit" name="calculate" value="Calculate">

</form>

<?php
if($si !== ""){
    echo "<h3>Principal = Rs. ".$p."</h3>";
    echo "<h3>Rate = ".$r."%</h3>"; 
    echo "<h3>Time = ".$t." years</h3>";
    echo "<h3>Simple Interest = Rs. ".$si."</h3>";
}
?>

</body>
</html>