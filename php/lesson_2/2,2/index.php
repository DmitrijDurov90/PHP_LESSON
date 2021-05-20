<!-- 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора
switch организовать вывод чисел от $a до 15. -->

<?php

echo "<hr>" ;

$c = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15) ;


switch ($c[0-15]){
   case $c[0]:
         echo "$c[0]<br>";
   case $c[1]:
         echo "$c[1]<br>";
   case $c[2]:
         echo "$c[2]<br>"; 
   case $c[3]:
         echo "$c[3]<br>";
   case $c[4]:
         echo "$c[4]<br>";
   case $c[5]:
         echo "$c[5]<br>";
   case $c[6]:
         echo "$c[6]<br>"; 
   case $c[7]:
         echo "$c[7]<br>";
   case $c[8]:
            echo "$c[8]<br>";
   case $c[9]:
            echo "$c[9]<br>";
   case $c[10]:
            echo "$c[10]<br>"; 
   case $c[11]:
            echo "$c[11]<br>";
   case $c[12]:
            echo "$c[12]<br>";
   case $c[13]:
            echo "$c[13]<br>";
    case $c[14]:
            echo "$c[14]<br>";                     
default:
echo "$c[15]";
   break;
}

?>

<hr>