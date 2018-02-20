<?php
	$to=$_POST['login'];
	$subject="bug facture";
	$url= 'http://localhost/PHPSLAMSISR/newPassword.php?token=';
	$tableau=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	//$token= [];
	$carac="";
	$nb_rand=0;
	for($i=1; $i!=34;$i++)
	{
		$nb_rand=rand(0,60);
		
		$carac=$carac.$tableau[$nb_rand];
	}

	$url=$url.$carac;
	echo $url;
	$message='Bonjour, afin de changer votre mot de passe veuillez cliquez sur le lien suivant :'.$url.'Cordialement';


	$infoSupplementaire="smtp.gmail.com";
	mail ($to,$subject,$message,$infoSupplementaire);
?>