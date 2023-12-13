<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8;', 'root', '');

if (isset($_POST['submit'])){

    if (!empty($_POST['email']) AND !empty($_POST['password'])){

        $email = htmlspecialchars( $_POST['email']);
        $pass = md5($_POST['password']);


        $recuperAdmin = $bdd->prepare('SELECT * FROM `etudiant` WHERE email= ? AND password= ?');
        $recuperAdmin->execute(array($email, $pass));

        if($recuperAdmin->rowCount() > 0){
            $_SESSION['email']=$email;
            $_SESSION['password']=$pass;
            $_SESSION['id']= $recuperAdmin->fetch()['id'];
            header('location:Etudiant.php');
        } else {
            echo"Votre mot de passe ou mail est incorrect";
        } 
    } else {
        echo "Veuillez remplir tous les champs!";
    }

}

?>
