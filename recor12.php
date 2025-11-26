<!DOCTYPE HTML>
<html>
<head>
    <title>Student Array Sorting</title>
</head>
<body>
<?php
$students = array("Jasna", "Punya", "Niya", "Aswani", "Anu");

echo "Original Array :<br>";
print_r($students);

asort($students);
echo "<br>Ascending Order :<br>";
print_r($students);

arsort($students);
echo "<br>Descending Order :<br>";
print_r($students);
?>

</body>
</html>

