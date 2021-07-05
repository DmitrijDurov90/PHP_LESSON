<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Моя галерея</title>
<link rel="stylesheet" type="text/css" href="/css/style1.css"/>

<script type="text/javascript">
	$(document).ready(function(){
		$("a.photo").fancybox({
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			speedIn: 600,
			speedOut: 600,
			hideOnOverlayClick: false,
			titlePosition: 'over'
		});	}); </script>

</head>

<body>
<div id="main">

<div class="post_title"><h2>Моя галерея</h2></div>		
<div class="gallery">
<?=$content?>
<?php 






?>
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