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
PHP Arithmetic Operators
+	Addition	
-	Subtraction
*	Multiplication	
/	Division	
%	Modulus
**	Exponentiation		

PHP Assignment Operators
x = y	x = y	
x += y	x = x + y	
x -= y	x = x - y	
x *= y	x = x * y	
x /= y	x = x / y		
x %= y	x = x % y

PHP Comparison Operators
==	Equal	$x == $y	
===	Identical	$x === $y
!=	Not equal	$x != $y	
<>	Not equal	$x <> $y
!==	Not identical	$x !== $y
>	Greater than	$x > $y	
<	Less than	$x < $y	
>=	
<=	
<=>	Spaceship	$x <=> $y

PHP Increment / Decrement Operators
++$x	
$x++		
--$x	
$x--	

PHP Logical Operators
and	And	$x and $y	
or	Or	$x or $y	
xor	Xor	$x xor $y		
&&	And	$x && $y	
||	Or	$x || $y	
!	Not	!$x	True 	

PHP Array Operators
+	Union	
==	Equality	
===	Identity	$x === $y	
!=	Inequality	$x != $y	
<>	Inequality	$x <> $y	
!==	Non-identity	$x !== $y	

PHP Conditional Assignment Operators
?:	Ternary		
??

To create a constant, use the define() function.


The PHP switch Statement
switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}


//For Loop Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

-->

<?php
// Addition
$x = 4;
$y = 4;

echo $x + $y;
    
//Subtraction
$x = 4;
$y = 4;

echo $x - $y;
    
//Multiplication
$x = 4;
$y = 4;

echo $x * $y;
    
//Division
$x = 4;
$y = 4;

echo $x / $y;
    
//Modulus
    
$x = 4;
$y = 4;

echo $x % $y;
    
//Exponentiation

$x = 4;
$y = 4;

echo $x ** $y;
    
//Swithch Statement
<?php
$favColor = "red";

switch ($favColor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

//For Loops
for ($x = 0; $x <=20; $x++){
echo "The number is: $x <br/>";
}
// While Loops
$x = 1;

while($x <= 15) {
  echo "The number is: $x <br>";
  $x++;
}
// Do While Loops
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
// For Each Loops
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
//OR
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

// 
    for ($x = 1; $x <= 1000; $x++) {
 if($x % 2 != 0){
 	echo $x."<br/>";
 }
}
?>
 
?>
</body>
</html>