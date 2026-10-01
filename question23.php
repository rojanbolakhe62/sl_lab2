<!DOCTYPE html>
<html>
<head>
    <title>Array to HTML Table</title>
    <style>
        table{
            border-collapse: collapse;
            width: 350px;
        }
        th, td{
            border:1px solid black;
            padding:8px;
            text-align:left;
        }
        th{
            background:#dddddd;
        }
    </style>
</head>
<body>

<h2>Information Table</h2>

<?php
$info = [
    "name" => "Ram Bahadur",
    "address" => "Lalitpur",
    "email" => "info@ram.com",
    "phone" => 98454545,
    "website" => "www.ram.com"
];

echo "<table>";
echo "<tr><th>Field</th><th>Value</th></tr>";

foreach($info as $key => $value){
    echo "<tr>";
    echo "<td>" . ucfirst($key) . "</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>