<?php
$result = "";

if(isset($_POST['generate'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];

    $eng = $_POST['eng'];
    $math = $_POST['math'];
    $sci = $_POST['sci'];
    $comp = $_POST['comp'];
    $nep = $_POST['nep'];

    $total = $eng + $math + $sci + $comp + $nep;
    $per = $total / 5;

    if($per >= 80) $grade = "A";
    elseif($per >= 60) $grade = "B";
    elseif($per >= 40) $grade = "C";
    else $grade = "F";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mark Sheet</title>
</head>
<body>

<h2>Student Mark Sheet</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Roll: <input type="text" name="roll" required><br><br>

    English: <input type="number" name="eng" required><br><br>
    Math: <input type="number" name="math" required><br><br>
    Science: <input type="number" name="sci" required><br><br>
    Computer: <input type="number" name="comp" required><br><br>
    Nepali: <input type="number" name="nep" required><br><br>

    <input type="submit" name="generate" value="Generate Mark Sheet">
</form>

<?php if(isset($_POST['generate'])){ ?>

<hr>

<h2 align="Left">MARK SHEET</h2>

<table border="1" cellpadding="8" cellspacing="0">
<tr><td>Name</td><td><?php echo $name; ?></td></tr>
<tr><td>Roll</td><td><?php echo $roll; ?></td></tr>
</table>

<br>

<table border="1" cellpadding="8" cellspacing="0">
<tr>
    <th>Subject</th>
    <th>Marks</th>
</tr>
<tr><td>English</td><td><?php echo $eng; ?></td></tr>
<tr><td>Math</td><td><?php echo $math; ?></td></tr>
<tr><td>Science</td><td><?php echo $sci; ?></td></tr>
<tr><td>Computer</td><td><?php echo $comp; ?></td></tr>
<tr><td>Nepali</td><td><?php echo $nep; ?></td></tr>

<tr><th>Total</th><th><?php echo $total; ?></th></tr>
<tr><th>Percentage</th><th><?php echo number_format($per,2); ?>%</th></tr>
<tr><th>Grade</th><th><?php echo $grade; ?></th></tr>
</table>

<?php } ?>

</body>
</html>