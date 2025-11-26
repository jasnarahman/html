<!DOCTYPE HTML>
<html>
<head>
    <title>Electricity Bill</title>

    <script>
        function clearBill() {
            document.getElementById("bill-section").innerHTML = "";
        }
    </script>

</head>
<body>

<h1><center>Electricity Bill<center></h1>

<form method="post" action="">
    
    <label>From Date: </label>
    <input type="date" name="from_date" required><br><br>

    <label>To Date: </label>
    <input type="date" name="to_date" required><br><br>

    <label>Consumer ID: </label>
    <input type="number" name="id" required><br><br>

    <label>Name: </label>
    <input type="text" name="name" required><br><br>

    <label>Units Consumed: </label>
    <input type="number" name="units" required><br><br>

    <input type="submit" value="Generate Bill">
    <input type="reset" onclick="clearBill()">
</form>

<hr>

<div id="bill-section">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $units = $_POST['units'];

    $from_date = $_POST['from_date'];
    $to_date   = $_POST['to_date'];

    if ($units <= 100) {
        $amount = $units * 5;
    } elseif ($units <= 200) {
        $amount = (100 * 5) + (($units - 100) * 7);
    } else {
        $amount = (100 * 5) + (100 * 7) + (($units - 200) * 10);
    }

    echo "<h2><center>Electricity Bill Details</center></h2>";
    echo "<b>Billing Period : </b> $from_date to $to_date <br><br>";
    echo "<b>Name : </b> $name <br>";  
    echo "<b>Consumer ID : </b> $id <br>";
    echo "<b>Units Consumed : </b> $units <br>";
    echo "<b>Total Amount : </b> ₹$amount <br>";
}
?>
</div>

</body>
</html>

