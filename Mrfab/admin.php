
<?php


session_start();

$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8;', 'root', '');

if (isset($_POST['submit'])){

    if (!empty($_POST['email']) AND !empty($_POST['password'])){

    $email = htmlspecialchars( $_POST['email']);
    $pass = md5($_POST['password']);


    $recuperAdmin = $bdd->prepare('SELECT * FROM `admin` WHERE email= ? AND password= ?');
    $recuperAdmin->execute(array($email, $pass));

    if($recuperAdmin->rowCount() > 0){
        $_SESSION['email']=$email;
        $_SESSION['password']=$pass;
        $_SESSION['id']= $recuperAdmin->fetch()['id'];
        header('location:Dashboard.php');
    }else{
            echo"votre mot de passe ou mail est incorrect";
        } 
    }else {
        echo"veuillez completer tous les champs...";
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Administrateur</title>
</head>
<body>

    <div class="container">
        <nav>
            <a href="#" class="logo"><img src="img/KELASI4-02.png" style="width:150px;"></a><div class=""></div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <button class="btn" id="displayForm">Se connecter</button>
                </li>
            </ul>
        </nav>

        <section>
            <div class="sec-container">
                <div class="form-wrapper">
                    <div class="card">
                        <div class="card-header">
                            <div id="forLogin" class="form-header active">Se connecter</div>
                        </div>

                        <div class="card-body" id="formContainer">
                            <form id="loginForm" action="" method="post">
                                <input type="text" class="form-control" name="email" placeholder="Nom de l'administrateur"/>
                                <input class="form-control" type="password" minlength="4"  name="password" placeholder="Votre mon password"/>
                                <button class="formButton" name="submit" >Connexion</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <script src="./main.js"></script>

    <script>
        const displayForm = _('displayForm');
        let forLogin =_('forLogin');
        let loginForm =_('loginForm');
        let forRegister =_('forRegister');
        let registerForm =_('registerForm');
        let formContainer =_('formContainer');
        displayForm.addEventListener('click',showForm);
        
        forLogin.addEventListener('click', () =>{
            forLogin.classList.add('active');
            forRegister.classList.remove('active');
            if (loginForm.classList.contains('toggleForm')){
                formContainer.style.transform ='translate(0%)';
                formContainer.style.transition = 'transform .5s';
                registerForm.classList.add('toggleForm');
                loginForm.classList.remove('toggleForm');
            }
        })
//je dois supprimer sa
        forRegister.addEventListener('click', () => {
            forLogin.classList.remove('active');
            forRegister.classList.add('active');
            if(registerForm.classList.contains('toggleForm')) {
                formContainer.style.transform = 'translate(-100%)';
                formContainer.style.transition = 'transform .5s';
                registerForm.classList.remove('toggleForm');
                loginForm.classList.add('toggleForm');
            }
        });
        

        function _(e) {
            return document.getElementById(e);
        }

        function showForm() {
            document.querySelector('.form-wrapper .card').classList.toggle('show')
        }
    </script>


</body>
</html>