<?php


function getGallery() 
{
	// $files10 = array_splice(scandir( GALLERY_BIG ),2);

	

    return  getAssocResult('SELECT * FROM imgCatalog ORDER BY likes DESC ' );
}
function getOneImage(int $id)
{
	return getOneResult("SELECT * FROM imgCatalog WHERE  id_img_catalog = {$id}");
}

function addLikes90(int $id)
{
	return executeSql("UPDATE `imgCatalog` SET `likes`= `likes`+1 WHERE id_img_catalog = {$id}");
}


if (isset($_POST['load'])) 
{

	$patch_big = ROOT . 'gallery_img/big/' . $_FILES["image"]["name"];
	$patch_small = ROOT . 'gallery_img/small/' . $_FILES["image"]["name"];


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


		

		$name_img = $_FILES["image"]["name"];
		$img_size = $_FILES["image"]["size"];

		
		mysqli_query(getDb(), 
	    "INSERT INTO imgCatalog( `img_name`) VALUES ('$name_img')");

		
		
	
		

		include('classSimpleImage.php');

			$image = new SimpleImage();
			$image->load($patch_big);
			$image->resizeToWidth(150);
			$image->save($patch_small);




			header("Location: /gallery/");

	}
		
	

		

	} else {
		echo 'Error !';
	};


};