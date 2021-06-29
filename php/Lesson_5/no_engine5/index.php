<?php 

include 'bd.php';



define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define('IMG_GALLERY', 'gallery_img/');
define('IMG_BIG', 'big/');
define('IMG_SMALL', 'small/');

// var_dump(ROOT . 'gallery');
// die();




$result = mysqli_query($bd, 'SELECT * FROM imgCatalog');





if (isset($_POST['action'])) {

	$patch_big = IMG_GALLERY .IMG_BIG . $_FILES["image"]["name"];
	$patch_small = IMG_GALLERY . IMG_SMALL . $_FILES["image"]["name"];

		$blacklist = array(".php", ".phtml", ".php3", ".php4");

		foreach ($blacklist as $item) {
		if(preg_match("/$item\$/i", $_FILES['image']['name'])) {
		echo "We do not allow uploading PHP files\n";
		exit;
		}
		}

		$imageinfo = getimagesize($_FILES['image']['tmp_name']);

		if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
			
		echo "Sorry, we only accept GIF and JPEG images\n";
		exit;
		};

		if ($_FILES["image"]["size"] > 1024 * 5 * 1024) {
			echo("Размер файла не больше 5 мб ");
			exit;
		};

	

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $patch_big)) {

		include('classSimpleImage.php');

			$image = new SimpleImage();
			$image->load($patch_big);
			$image->resizeToWidth(150);
			$image->save($patch_small);

		
		
		header("Location: /gallery");

	} else {
		echo 'Error !';
	};


};



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
<div class="gallery">
		<?php foreach($result as $val): ?>
			<a class="photo" href="/php/Lesson_5/no_engine5/image.php?id=<?=$val['id_img_catalog']?>">
				<img src="gallery_img/small/<?=$val['img_name']?>" width="150" /></a> 
		<?php endforeach;?>
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

