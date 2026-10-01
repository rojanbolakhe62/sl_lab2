<!DOCTYPE html>
<html>
<head>
    <title>Annual Income Tax Calculator</title>
</head>
<body>

<h2>Annual Income Tax Calculator - FY 2083/84</h2>

<form method="post">

    Annual Taxable Income:
    <input type="number" name="income" step="0.01" required>
    <br><br>

    Gender:
    <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <br><br>

    <input type="submit" name="calculate" value="Calculate Tax">

</form>

<?php

if (isset($_POST["calculate"])) {

    $income = $_POST["income"];
    $gender = $_POST["gender"];

    $tax1 = 0;
    $tax2 = 0;
    $tax3 = 0;
    $tax4 = 0;
    $tax5 = 0;

    // First slab: Up to 1,000,000 at 1%
    if ($income > 0) {
        $amount = min($income, 1000000);
        $tax1 = $amount * 0.01;
    }

    // Second slab: Next 500,000 at 10%
    if ($income > 1000000) {
        $amount = min($income - 1000000, 500000);
        $tax2 = $amount * 0.10;
    }

    // Third slab: Next 1,000,000 at 20%
    if ($income > 1500000) {
        $amount = min($income - 1500000, 1000000);
        $tax3 = $amount * 0.20;
    }

    // Fourth slab: Next 1,500,000 at 27%
    if ($income > 2500000) {
        $amount = min($income - 2500000, 1500000);
        $tax4 = $amount * 0.27;
    }

    // Fifth slab: Above 4,000,000 at 29%
    if ($income > 4000000) {
        $amount = $income - 4000000;
        $tax5 = $amount * 0.29;
    }

    $totalTax = $tax1 + $tax2 + $tax3 + $tax4 + $tax5;

    // 10% discount for female taxpayer
    if ($gender == "female") {
        $discount = $totalTax * 0.10;
        $totalTax = $totalTax - $discount;
    }

    $netIncome = $income - $totalTax;

    echo "<h3>Tax Calculation Result</h3>";

    echo "Annual Taxable Income: NPR " . number_format($income, 2) . "<br><br>";

    echo "Tax under First Slab (1%): NPR " . number_format($tax1, 2) . "<br>";
    echo "Tax under Second Slab (10%): NPR " . number_format($tax2, 2) . "<br>";
    echo "Tax under Third Slab (20%): NPR " . number_format($tax3, 2) . "<br>";
    echo "Tax under Fourth Slab (27%): NPR " . number_format($tax4, 2) . "<br>";
    echo "Tax under Fifth Slab (29%): NPR " . number_format($tax5, 2) . "<br><br>";

    echo "Total Tax Payable: NPR " . number_format($totalTax, 2) . "<br>";
    echo "Net Income After Tax: NPR " . number_format($netIncome, 2);

    if ($gender == "female") {
        echo "<br><br>Female Tax Discount: 10%";
    }
}

?>

</body>
</html>