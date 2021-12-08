<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>test</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="bg.css">

</head>
<body>

<div class=bouton> 
        <ul>
            <a href="menu.html" class="bouton2">menu</a>
            <a href="test.php" class="bouton2">exo 1</a>
            <a href="exo2.php" class="bouton2">exo 2</a>
        </ul>
      </div>

<?php
$tab = array(
    "A"  => 1,
    "B" =>  2,
    "C" =>  3,
    "D" =>  4,
    "E" =>  5,
);

echo $tab["A"];
echo $tab["B"];
echo $tab["C"];
echo $tab["D"];
echo $tab["E"];


    ?>

</body>
  </html>