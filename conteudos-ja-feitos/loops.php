<?php

$i = 7;
while ($i < 10) {
  echo $i;
  $i++;   //   i++ <=> i = i+1
}

echo "<br>pos increment<br>";
$i =0;
echo $i;
$anterior = $i++;
echo $anterior;
echo $i;

echo "<br>pre increment<br>";

$i =0;
echo $i;
$anterior = ++$i;
echo $anterior;
echo $i;


echo "<br>pos decrement<br>";
$i =10;
echo $i;
echo "<br>";
$anterior = $i--;
echo $anterior;
echo "<br>";
echo $i;

echo "<br>pre decrement<br>";
$i =10;
echo $i;
echo "<br>";
$anterior = --$i;
echo $anterior;
echo "<br>";
echo $i;



$i=8;
do {
    echo $i;
    $i++;
  } while ($i < 6);
  


for ($x = 10; $x >= 0; $x--) {
    echo "The number is: $x <br>";
  }


$carros = array("fusca","camaro","opala","opala","fiesta","maverick","chevete","uno com escada");

foreach ($carros as $x) {
  echo "$x <br>";
}


?>