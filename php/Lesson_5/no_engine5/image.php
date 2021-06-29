<?php 
include 'bd.php';

$id = (int)$_GET['id'];

$result = mysqli_query($bd, "SELECT * FROM imgCatalog WHERE id_img_catalog = {$id}");
$val = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Моя галерея</title>
<link rel="stylesheet" type="text/css" href="/php/Lesson_5/no_engine5/style50.css"/>


</head>

<body>
<div id="main">
<div class="post_title"><h2>Моя галерея</h2></div>

<a href="/php/Lesson_5/no_engine5/">Главная</a>

<div class="gallery">
		
            

				<img src="gallery_img/big/<?=$val['img_name']?>" width="840px" />	
		
	</div>
<div>
		Загрузить изображения:
		<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
			
			<input type="hidden" name="action" value="true">
		    <input type="file" name="image"/>
			<input type="submit" value="Загрузить" name="load" />
		
		
		</form>

</div>

</body>
</html>

