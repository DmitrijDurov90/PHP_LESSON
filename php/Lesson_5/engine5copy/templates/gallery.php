<?php 


?>
<div class="gallery">
<?php foreach($params['files'] as $item): ?>
		<div class="gallery_box"> 
		

				<div><?= $item['img_name'] ?></div>
		
				<a class="photo" href="/image/?id=<?=$item['id_img_catalog']?>">
					<img src="/gallery_img/small/<?=$item['img_name']?>" height="115px"  width="250px"/></a> 
			<div>
				<?= $item['likes'] ?>
			</div>
		</div>
<?php endforeach;?>
</div>
<div class="gallery_box">
	<p>	Загрузить изображения:</p>
		<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
			
			<input type="hidden" name="action" value="true">
		    <input type="file" name="image"/>
			<input type="submit" value="Загрузить" name="load" />
		
		
		</form>	
</div>