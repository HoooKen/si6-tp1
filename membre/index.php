<html>
    <head>
        <link rel="stylesheet" href="design.css" />
        <title>Panel Membre</title>
    </head>
    <body>
        <?php
        require_once('../inc/header.php');
            if(!$_SESSION['pseudo'] == NULL)
            {
                ?>

        <?php
            }
            require_once('../inc/footer.php');
        ?>
    </body>

</html>
