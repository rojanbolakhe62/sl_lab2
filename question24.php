<!DOCTYPE html>
<html>
<head>
    <title>Student Mark Ledger</title>
    <style>
        body{
            font-family: Arial;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th{
            background: #dddddd;
        }
        .odd{
            background: #111;
            color: white;
        }
        .even{
            background: #d9d9d9;
        }
        .pass{
            background: #2ecc71;
            color: white;
            font-weight: bold;
        }
        .fail{
            background: red;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Mark Ledger</h2>

<?php

$students = [
["Kajal",25,56,89,57,64,98],
["Jam",5,32,89,57,64,98],
["Shyam",8,54,79,57,99,68],
["Rita",10,18,19,56,54,68],
["Gita",4,56,89,57,69,98],
["Sita",24,56,89,57,24,98],
["Sita",24,56,89,57,24,98],
["Sita",24,56,89,57,24,98]
];

echo "<table>";
echo "<tr>
<th>SN</th>
<th>Name</th>
<th>Roll</th>
<th>Web Tech II</th>
<th>DBMS</th>
<th>Economics</th>
<th>DSA</th>
<th>Account</th>
<th>Total</th>
<th>Result</th>
</tr>";

$sn = 1;

foreach($students as $row){

    $total = $row[2]+$row[3]+$row[4]+$row[5]+$row[6];

    if($row[2]>=40 && $row[3]>=40 && $row[4]>=40 && $row[5]>=40 && $row[6]>=40){
        $result="Pass";
        $class="pass";
    }else{
        $result="Fail";
        $class="fail";
    }

    $bg = ($sn%2==0) ? "even" : "odd";

    echo "<tr class='$bg'>";
    echo "<td>$sn</td>";
    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo "<td>$row[5]</td>";
    echo "<td>$row[6]</td>";
    echo "<td>$total</td>";
    echo "<td class='$class'>$result</td>";
    echo "</tr>";

    $sn++;
}

echo "</table>";

?>

</body>
</html>