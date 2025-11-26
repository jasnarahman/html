<!DOCTYPE HTML>
<html>
<head>
<title>Indian Cricket Players</title>
</head>
<?php
$players = array(
    "Virat Kohli" => "Batsman",
    "Jasprit Bumrah" => "Bowler",
    "MS Dhoni" => "Batsman",
    "Sachin Tendulkar" => "Batsman",
    "KL Rahul" => "Bowler",
);
?>
<body>
<h2 style="text-align: center;">List of Indian Cricket Players</h2>
<center>
<table border="1" width="30%">
<tr>
<th>No.</th>
<th>Player Name</th>
<th>Position</th>
</tr>
</center>
<?php
$index = 1;
foreach ($players as $player => $position) {
   echo "<tr>";
   echo "<td>" . $index++ . "</td>";
   echo "<td>" . $player . "</td>";
   echo "<td>" . $position . "</td>";
   echo "</tr>";
  }
 ?>
</table>
</body>
</html>
