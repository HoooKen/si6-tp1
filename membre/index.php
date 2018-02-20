<html>
<head>
    <link rel="stylesheet" href="design.css" />
    <title>Panel Membre</title>
</head>
<body>
<?php
require_once('../inc/header.php');
$connected=true;
if($connected == true)
{
    ?>
    <br />
    <br />

    <div class="link">
        <a href="#aperçu">Aperçu du compte</a>
        <a href="#modif">Modifier le profil</a>
    </div>
    <br />
    <br/>
    <br/>
    <br />
    <br />
    <br />
    <?php
}
require_once('../inc/footer.php');
?>
</body>

</html>
