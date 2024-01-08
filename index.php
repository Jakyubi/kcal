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

/*
Do programu wrzucamy nazwę produktu, jego wagę całkowitą, cenę za sztukę oraz liczbę kalorii na 100 gram. 
Program liczy ile kalorii dostaniemy za złotówkę, oraz ile kalorii znajduje się w jednym gramie produktu
*/

echo'<table> 
<th>ID</th>
<th>Name</th>
<th>Calories</th>
<th>Cost</th>
<th>Weight[g]</th>
<th>Calories per 1PLN</th>
<th>Calories per 1 gram</th>
'; //kalorie w całym produkcie[kalorie na gram razy waga]

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

    NAME: <input type="text" id="name" name="name"> [char]
    <br>
    KCAL: <input type="text" id="kcal" name="kcal"> [int[kcal/100g]]
    <br>
    COST: <input type="text" id="cost" name="cost">[float[pln]]
    <br>
    WEIGHT: <input type="text" id="weight" name="weight">[float[g]]
    <br>
    <input type="submit" value="UPLOAD">
</form>


</body>
</html>