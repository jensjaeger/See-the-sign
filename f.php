<?php 
  //shows adds in an i frame
  include_once('lib/sign.php');
?>
<!DOCTYPE html>
<head>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php $signs[array_rand($signs)]->printAd(); ?>
</body>
