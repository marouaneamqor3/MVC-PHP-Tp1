<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php

	foreach ($tab_v as $v){
		echo "<p> Voiture immatricuation >> ". $v->getImmatriculation()."</p>";

	}
?>

</body>
</html>
