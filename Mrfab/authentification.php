
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/authentification.css">
    <title>Authentification</title>
</head>
<body>
<?php

if (isset($message)){
    foreach($message as $message){
        echo '<div class="message">
        <span>'.$message.'</span>
        <i class = "fas fa-times" onclick="this.parentElement.remove()"></i>
    </div>  ';
    }
    
}

?>

    <div class="container">
        <nav>
            <a href="#" class="logo"><img src="img/KELASI4-02.png" style="width:6em;"></a><div class=""></div>
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
                            <div id="forRegister" class="form-header">S'inscrire</div>
                        </div>

                        <div class="card-body" id="formContainer">
                            <form id="loginForm"  action="connexion.php" method="POST">
                            <input type="email" name="email" class="form-control" placeholder="email"/>
                                <input type="password" name="password" class="form-control" placeholder="Mot des passe"/>

                                <input class="formButton" type="submit" name="submit" value="Connexion">
                            </form>

                            <form id="registerForm" class="toggleForm" action="inscription.php" method="POST" >
                                <input type="text" name="nom" class="form-control" placeholder="utisateur"/>
                                <input type="text" name="matricule" class="form-control" placeholder="Matricule"/>
                                <input type="email" name="mail" class="form-control" placeholder="email"/>
                                <input type="password" name="motpass" class="form-control" placeholder="Mot de passe"/>
                                <input type="password" name="cmotpass" class="form-control" placeholder="Confirmer mot de passe"/>
                                <input class="formButton" type="submit" name="submit" value="Inscription">
                            </form>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



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