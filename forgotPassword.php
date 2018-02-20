<html>
    <head>
        <link rel="stylesheet" href="design_forgot.css" />
        <title>Mot de passe oublié | PHPSLAMSISR</title>
    </head>
    <body>
    <div class="logo">
        <img src="logo.png" />
    </div>
    <div class="panel">
        <?php
        echo '<form action="envoieMail.php" method="POST">
                    <p>Identifiant :</p>
                    <input type="text" name="login" value="" />
                    <br />
                    <br />
                    <input type="submit" name="soumettre" value="Envoyer" />
                    <br />';
        ?>
    </div>
    </body>


</html>
