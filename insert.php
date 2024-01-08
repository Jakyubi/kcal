<?php
require('db_connect.php');
$name = $_POST['name'];
$kcal = $_POST['kcal'];
$cost = $_POST['cost'];
$weight = $_POST['weight'];
$calCost = $kcal/$cost;
$calCost = round($calCost, 3);
$calWeight = $kcal/$weight;
$calWeight = round($calWeight, 3);


$sql = "INSERT INTO main  VALUES ('NULL', '$name', '$kcal', '$cost', '$weight', $calCost, $calWeight)";
mysqli_query($conn, $sql);
header('Location: index.php');
?>