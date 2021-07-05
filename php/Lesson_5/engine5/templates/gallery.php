<?php 

// var_dump(__DIR__);
// die();

 ?>



<?php foreach($params['gallery_img'] as $val): ?>
	<a class="photo" href="/image/?id=<?=$val['id_img_catalog']?>">
		<img src="/gallery_img/small/<?=$val['img_name']?>" width="150" /></a> 
<?php endforeach;?>
