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