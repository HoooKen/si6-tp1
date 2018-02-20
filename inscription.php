<html>
	<head>
		<title>Inscription</title>
		<link rel="stylesheet" href="design_inscription.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

	<body>
		<div class="logo">
			<img src="logo.png" />
		</div>
		<div class="panel">
			<form action="inscription_traitement.php" method="POST">
				<p>Identifiant :</p>
				<input type="text" name="login" value="" />
				<br />
				<p>Mot de passe :</p>
				<input type="password" name="password" value="" />
				<p>Comfirmation : </p>
				<input type="password" name="password-c" value="" />
				<p>Email : </p>
				<input type="text" name="mail" value="" />
                <p>Prenom : </p>
                <input type="text" name="prenom" value="" />
                <p>Nom : </p>
                <input type="text" name="nom" value="" />
                <br />
                <div class="captcha">
                    <div class="g-recaptcha" data-sitekey="6LdQo0QUAAAAAGpwjWRyRbcVLCUp5S0WCxVT9lHZ">
                    </div>
                </div>
                <br />
				<input type="submit" name="soumettre" value="Inscription" />
				<br />
			</form>	
		</div>
	</body>

</html>