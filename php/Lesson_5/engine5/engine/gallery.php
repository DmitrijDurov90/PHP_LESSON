<?php
 

function getGallery() 
{

	// var_dump(ROOT . 'public/gallery_img/big/');
	// die();

	$result = getAssocResult('SELECT * FROM imgCatalog');
	
	return $result;	

};



if (isset($_POST['load'])) {

	
	// $img_arry = getAssocResult('SELECT img_name FROM imgCatalog')[0]['img_name'];
	// $img_id = $_FILES['image']['name'];


	
	// var_dump($img_arry);
	// die();

	

	
	

	$patch_big = ROOT . 'public/gallery_img/big/' . $_FILES["image"]["name"];
	$patch_small = ROOT . 'public/gallery_img/small/' . $_FILES["image"]["name"];


	$img_size = $_FILES["image"]["size"];

	$img_arry = getAssocResult('SELECT img_name FROM imgCatalog');
	$img_id = $_FILES['name']['name'];


	var_dump($img_id);
	die();
	$key = array_search('green', $array);

	if (!$img_tru) {
	
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

		$img_size = $_FILES["image"]["size"];

		// var_dump($img_size);
		// die();
		
		$files10 = array_splice(scandir( ROOT . 'public/gallery_img/big/' ),2);
		mysqli_query(getDb(), "INSERT INTO imgCatalog( `img_name`) VALUES ('" . implode("'),('",$files10) . "')");
		

		include('classSimpleImage.php');

			$image = new SimpleImage();
			$image->load($patch_big);
			$image->resizeToWidth(150);
			$image->save($patch_small);


		header("Location: /?page=gallery");

	}
		
	

		

	} else {
		echo 'Error !';
	};


};