<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>test</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="Untitled-1.css">

</head>
<body>
      
      coucou2
    
      <?php 
      $var1=" une variable";
      $var2= 12;

      ?>
<div>
      <?php

      echo"<span>je suis".$var1."je suis un chiffre".$var2."</span>";


      $var1 = rand(0,100);
      echo $var1;
      if($var1%2==1){
        echo"je suis impaire";
      }else{
        echo"je suis paire";
      }
      ?>
</div>

</body>
    </html>