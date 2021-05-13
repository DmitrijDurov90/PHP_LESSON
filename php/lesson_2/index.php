<!-- 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
Если $a и $b положительные, вывести их разность.
Если $а и $b отрицательные, вывести их произведение.
Если $а и $b разных знаков, вывести их сумму.
Ноль можно считать положительным числом.
 -->
<?php
$a = -5;
$b = 42;
if( $a >= 0 && $b >= 0 ){
   $x = $a - $b ;
   echo  "Разность = {$x}" ;
}  
else if ( $a < 0 && $b < 0 ){
   $x = $a * $b ;
   echo  "Произведение = {$x}" ;
}
else {
   $x = $a + $b ;
   echo  "Сумму = {$x}" ;
}
   
?>

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

<!-- 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
        Обязательно использовать оператор return.
 -->

<?php

function mult($a, $b){
   $q = $a * $b;
   return $q;
}
echo 'умножение ' . mult(8, 2);

echo '<hr>' ;

function subtraction($a, $b){
   $w = $a - $b;
   return $w;
}
echo 'вычитание ' . subtraction(8, 2);

echo '<hr>' ;

function summ($a, $b){
   $r = $a + $b;
   return $r;
}
echo 'сумма ' . summ(8, 2);

echo '<hr>' ;

  function division($a, $b){
      $r = $a / $b;
      return $r;
   };
echo 'деление ' . division(8, 2);

echo '<hr>' ;

echo '4. Реализовать функцию с тремя параметрами <hr>' ;
?>

<!-- 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических операций 
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch). 
-->

 <?php

function mathOperation($arg1, $arg2, $operation){
   switch($operation){
          case 'сложение':
              return $arg1 + $arg2;
              break;
          case 'вычитание':
              return $arg1 - $arg2;
            break;
        case 'деление':
                      return $arg1 / $arg2;
            break;
          case 'умножение':
              return $arg1 * $arg2;
            break;
     }
}

echo mathOperation(8,9,'сложение')  ;

echo '<hr>' ;


?> 

<!-- 5. Посмотреть на встроенные функции PHP. 
   Используя имеющийся HTML шаблон, 
   вывести текущий год в подвале при помощи встроенных функций PHP. 
-->
<?php 
$today = date("Y-m-d");
echo $today;

?>



<!-- 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: 
function power($val, $pow), где $val – заданное число, $pow – степень -->


<?php 

function power($val,$pow)
{
	if ($pow != 0)
	{
		return $val * power ($val, $pow - 1);
	}
		return 1;
}

echo power(3, 4);
echo '<hr>' ;
?>

<!-- 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, 
         например: 22 часа 15 минут, 21 час 43 минуты.
 -->

 <?php 
 
 $today = getdate();

function timeS($h, $m){

   if ($h == 1 || $h == 21) {
      $hours = " час";}
      elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
      $hours = " часа";}
      else {$hours = " часов";}
      if (($m<20) || ($m>10))
      {$minutes = " минут.";}
      elseif (($m % 10) === 1) {
      $minutes = " минута.";}
      elseif ((($m % 10)>=2) && (($m % 10)<=4)) {
      $minutes = " минуты.";}
      else {
      $minutes = " минут.";}
     
      echo $h . $hours . " " . $m . $minutes;
}

timeS( $today[hours], $today[minutes] ) ;



 ?>