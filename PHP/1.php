<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learning</title>
</head>
<body>

<!-- 

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource 

-->

<?php
   
   $x = "Hello World"; //String
   $y = 9304; //Integer
   $n = 12.4; //Float
   $k = true; //Boolean
   $l = false; //Boolean
   $cars = array("Volvo","BMW","Toyota");

   echo $x;
   echo "<br/>";
   echo $y;
   echo "<br/>";
   echo $n;
   echo "<br/>";
   echo $k;
   echo "<br/>";
   echo $l;
   echo "<br/>";
   var_dump ($cars);
   echo "<br/>";
    var_dump($x);
?>
</body>
</html>