<?php
   
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


