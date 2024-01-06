<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require("db_connect.php");
$select_all = "SELECT * FROM main";
$result =  $conn->query($select_all); 


//TODO: add data to db through form. table content: id, name, calories, cost, weight, calories/cost, calories/weight
//TODO: fetch data

echo'<table> 
<th>ID</th>
<th>Name</th>
<th>Calories</th>
<th>Cost</th>
<th>Weight</th>
<th>Calories/Cost</th>
<th>Calories/Weight</th>
';

while($row = $result->fetch_assoc()){
    echo'<tr>';

    echo'<td>' . $row['id'] . '</td>';
    echo'<td>' . $row['Name'] . '</td>';
    echo'<td>' . $row['Calories'] . '</td>';
    echo'<td>' . $row['Cost'] . '</td>';
    echo'<td>' . $row['Weight'] . '</td>';
    echo'<td>' . $row['Calories/Cost'] . '</td>';
    echo'<td>' . $row['Calories/Weight'] . '</td>';

    echo'</tr>';
}
echo'</table>';
?>
<form action="insert.php" method="post">

    NAME: <input type="text" id="name" name="name">
    <br>
    KCAL: <input type="text" id="kcal" name="kcal">
    <br>
    COST: <input type="text" id="cost" name="cost">
    <br>
    WEIGHT: <input type="text" id="weight" name="weight">
    <br>
    <input type="submit" value="UPLOAD">
</form>


</body>
</html>