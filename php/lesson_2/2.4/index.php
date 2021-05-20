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
                      if ( $arg1 == 0 ) {

                          $err = '<p>Делить на ноль нельзя !</p>';
                          echo $err ;

                      } else {
                        return $arg1 / $arg2;
                      };
            break;

          case 'умножение':
              return $arg1 * $arg2;
            break;
     }
}

echo mathOperation(0,9,'деление')  ;

echo '<hr>' ;


?> 