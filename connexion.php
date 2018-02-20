<?php
    require_once('jointures/database.php');
    session_start();
	$id=$_POST['login'];
	$password=$_POST['password'];
	//$password_hash=hash('sha512',$password);
    $password_hash=md5($password);
    $sql=$bdd->prepare("SELECT password FROM users WHERE login=:login");
    $sql->bindParam(':login', $id);
    $sql->execute();
    $data=$sql->fetch();
    $connect = false;
    if($data['password'] == $password_hash)
    {
        echo'Connexion réussie <br />';
        $_SESSION['pseudo'] = $data['login'];
    }
    else
    {
        echo 'Erreur de connexion.';
    }

    if($_SESSION['pseudo'] == NULL)
    {
        header('Location: ../tp_si6/index.php');
    }
    else
    {

    }
?>