<?php 

$dir = 'gallery_img/big/' ;

 $files = scandir($dir);
 unset($files[0]);
 unset($files[1]);

 
 foreach ($files as $key => $value) {


                    if ( $value ) {

                        $dir_img = $dir ."/" . $value ;
                    
                        echo "<a rel=\"gallery\" class=\"photo\" href=\"{$dir_img}\">
                            <img src=\"{$dir_img}\" width=\"150\" height=\"100\" />
                            </a>";
                
                    }
                    
};