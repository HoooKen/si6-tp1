<?php
    require_once('jointures/database.php');
    $login=$_POST['login'];
    $password=$_POST['password'];
    $passwordc=$_POST['password-c'];
    $password_hash=md5($password);
    $email=$_POST['mail'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];

    if($password != $passwordc)
    {
        echo 'Mot de passe différent réessayez <br />';
        echo "<a href='inscription.php'>Retour</a>";
    }
    else
    {
        $sql = $bdd->prepare("INSERT INTO users(login,password,email,prenom,nom) VALUES (:login,:password,:email,:prenom,:nom)");
        $sql->bindParam(':login',$login);
        $sql->bindParam(':password', $password_hash);
        $sql->bindParam(':email',$email);
        $sql->bindParam(':prenom',$prenom);
        $sql->bindParam(':nom',$nom);
        $sql->execute();
        if($sql)
        {
            echo'Inscription validée';
        }
    }


?>