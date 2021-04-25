<?php

//$cars = array("BMW","Toyo","Toyota");
//echo "I like ".$cars[0].", ".$cars[1].", ".$cars[2].".";
//echo count($cars);

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) 
{
  echo $cars[$x];
  echo "<br>";
}

$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach ($age as $x => $x_value) 
{
	echo "Key=".$x.",Value=".$x_value;
	echo "<br>";
}

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);


$modules = array("Soft","data","web" );

for ($i=0; $i < count($modules); $i++) 
{ 
	echo ("module $i is modules[0]<br/>");
}

?>