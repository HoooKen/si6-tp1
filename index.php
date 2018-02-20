<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Connexion | PHPSLAMSISR</title>
		<link rel="stylesheet" href="design.css" />
        <link rel="stylesheet" href="inc/design.css" />
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

	<body>

    <?php
        require_once('inc/header.php');
        if($_SESSION['pseudo'] != NULL)
        {
            header('Location: http://localhost/tp_si6/accueil.php');
        }


    ?>
    <br />
    <br />
    <br />

		<div class="panel">
			<form action="connexion.php" method="POST">
				<p>Identifiant :</p>
				<input type="text" name="login" value="" />
				<br />
				<p>Mot de passe :</p>
				<input type="password" name="password" value="" />
				<div class="captcha">
					<div class="g-recaptcha" data-sitekey="6LdQo0QUAAAAAGpwjWRyRbcVLCUp5S0WCxVT9lHZ">
					</div>
				</div>
                <br />
				<input type="submit" name="soumettre" value="Connexion" />
				<br />
					<div class="oublier">
						<a href="forgotPassword.php"><p>Mot de passe oublié ?</p></a>
					</div>

			</form>			
			<br />
		</div>
    <br/>
    <br />
    <?php
        require_once('inc/footer.php');
    ?>
	</body>
</html>