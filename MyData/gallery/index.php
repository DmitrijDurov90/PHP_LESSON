<?php 




define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define('IMG_GALLERY', 'gallery_img/');
define('IMG_BIG', 'big/');
define('IMG_SMALL', 'small/');

// var_dump(ROOT . 'gallery');
// die();









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

$files10 = array_splice(scandir( IMG_GALLERY.IMG_BIG),2);

?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Моя галерея</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="./scripts/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="./scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="./scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript">
	$(document).ready(function(){
		$("a.photo").fancybox({
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			speedIn: 500,
			speedOut: 500,
			hideOnOverlayClick: false,
			titlePosition: 'over'
		});	}); </script>

</head>

<body>
<div id="main">
<div class="post_title"><h2>Моя галерея</h2></div>
	<div class="gallery">
		<?php foreach($files10 as $val): ?>
			<a rel="gallery" class="photo" href="gallery_img/big/<?=$val?>"><img src="gallery_img/small/<?=$val?>" width="150" height="100" /></a> 
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

