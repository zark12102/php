<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>test</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="bg.css">

</head>
<body>
<nav>
<div class=bouton> 
        <ul>
            <a href="menu.html" class="bouton2">menu</a>
            <a href="test.php" class="bouton2">exo 1</a>
            <a href="exo2.php" class="bouton2">exo 2</a>
        </ul>
      </div>
<div class=bot>
      <a href="test.php" class="bouton2">RAFRECHIRE</a>
      </div>

     </nav>
      <?php 
      $var1=" une variable";
      ?>
      <?php
      $var1 = rand(0,100);
      echo $var1;
      if($var1%2==1){
        ?><div class=impaire>

          <?php
        echo"je suis impaire";?>
        </div>


        <?php
        }else{
          ?>


          <div class=paire>

          <?php
        echo"je suis paire";?>
        </div><?php
      }
      ?>
  </body>
  </html>