<?php 
echo ' ------ 1 ------- <br>';

$a = 0;

while ($a <= 100) {
    if ( $a % 3 ){

        
    }else {

        echo $a . '<br>' ;
    }
    
    $a++;
}
echo " <hr> ";
echo ' ------ 2 ------- <br>';

function funName($i) {

            
    do {

        if ($i == 0 ) {
            echo $i . " равно 0 <br>";
            
        } elseif ($i % 2) {
            echo $i . " четное число<br>";

        } else {
            echo $i . " нечетное число<br>";
        };

          
          $i++ ;
        
    
    } while ($i <= 10);


};


funName(3);

echo ' ------ 3 ------- <br>';

$mass = array('Московская область' => array('Москва', 'Зеленоград', 'Клин'),
            'Ленинградская область' => array('Санкт-Петербург', 'Павловск', 'Кронштадт'),
            'Республика Ингушетия' => array('Карабулак', 'Назрань', 'Яндаре'));
foreach($mass as $obl => $towns)
{

    echo "$obl: <br>";
    

        foreach($towns as $town)
        {
            
            echo " $town , <br> ";
            
        }
        echo " <hr> ";
}

echo ' ------ 4 ------- <br>';


function translit($s) {

    $s = (string) $s; // преобразуем в строковое значение
    
    $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
    $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
    
    return $s; // возвращаем результат
  }

  echo translit("переводим строку в нижний регистр");

  echo " <hr> ";
  echo ' ------ 5 ------- <br>';


  function translit2($s) {

    // $s = (string) $s; // преобразуем в строковое значение
    
    $s = str_replace(" ", "_", $s); // заменяем пробелы знаком минус

    return $s; // возвращаем результат
  }

  echo translit2(' возвращаем   результат ');


  echo " <hr> ";
  echo ' ------ 6 ------- <br>';

  include ("menu.php");


  echo " <hr> ";
  echo ' ------ 6 ------- <br>';

  for($i = 0; print $i, $i++ < 9;);
  
