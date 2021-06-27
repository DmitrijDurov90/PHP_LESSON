<?php



function getGallery() {
    return  array_splice(scandir(ROOT . 'public/gallery_img/big/'), 2);
}




if (isset($_POST['action'])) {

	$patch_big = ROOT . '/public/gallery_img/big/' . $_FILES["image"]["name"];
	$patch_small = ROOT . '/public/gallery_img/small/' . $_FILES["image"]["name"];

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

		
		
		header("Location: /php/Lesson_4/engine_4/public/?page=gallery");

	} else {
		echo 'Error !';
	};


};