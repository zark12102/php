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


$tab2 = array(12,212,52,17,564);
for($i = 0; $i <=4; $i++){
    echo $tab2[$i];
}
    ?>

<table>
        <thead>
            <tr>
                <th> <?php echo $tab2[0]?> </th>
            </tr>
</table>

</body>
  </html>