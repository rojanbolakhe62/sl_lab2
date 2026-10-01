<!DOCTYPE html>
<html>
<head>
    <title>PHP Datatypes</title>
</head>
<body>

<h2>Different Datatypes in PHP</h2>

<?php

// Variables of different datatypes
$name = "Rojan";
$age = 20;
$salary = 25000.50;
$isStudent = true;
$marks = array(80, 90, 75);

// a. Print using echo and print
echo "<h3>Using echo</h3>";
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Salary: $salary <br>";
echo "Student: $isStudent <br>";

print "<h3>Using print</h3>";
print "Name: $name <br>";
print "Age: $age <br>";
print "Salary: $salary <br>";
print "Student: $isStudent <br>";

// b. Display array
echo "<h3>Using print_r</h3>";
print_r($marks);

echo "<h3>Using var_dump</h3>";
var_dump($marks);

// c. Check data types
echo "<h3>Data Types</h3>";
echo "Name: " . gettype($name) . "<br>";
echo "Age: " . gettype($age) . "<br>";
echo "Salary: " . gettype($salary) . "<br>";
echo "Student: " . gettype($isStudent) . "<br>";
echo "Marks: " . gettype($marks) . "<br>";

?>

</body>
</html>