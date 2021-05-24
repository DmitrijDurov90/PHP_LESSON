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

     if ( $a == 0 ) {

         $err = '<p>Делить на ноль нельзя !</p>';
         echo $err ;
         
     } else {

         $r = $a / $b;
         return $r;
     }
      
   };
echo 'деление ' . division(8, 2);

echo '<hr>' ;

echo '4. Реализовать функцию с тремя параметрами <hr>' ;
?>