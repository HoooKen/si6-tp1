<!--methode php recupere l'url
methode explode-->

<?php
	$url = $_SERVER['REQUEST_URI'];
	//echo $url;
	$token=explode("token=",$url);
	echo $token[1];
?>