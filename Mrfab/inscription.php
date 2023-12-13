 
<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mydb";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['nom']);
    $matricule = mysqli_real_escape_string($conn, $_POST['matricule']);
    $email = mysqli_real_escape_string($conn, $_POST['mail']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['motpass']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cmotpass']));

    
    
    $select_users = mysqli_query($conn, "SELECT * FROM `etudiant` WHERE  email = '$email' AND password = '$pass' ") or die('query failed');

    if (mysqli_num_rows($select_users) > 0){
        $message[] = 'utilisateur existe';
    } else {
        if($pass != $cpass){
            $message[] = 'mots de passe ne pas correct';
        } else{
            mysqli_query($conn, "INSERT INTO `etudiant`(nom, email, password , matricule) VALUES('$name', '$email', '$pass', '$matricule')")
            or die('query failed');
            $message[] = 'registerd succes!';
            header('location:Etudiant.php');

        }
    }
}

?>

