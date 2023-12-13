<?php

include('config.php');

include 'contentEtudiant.php';

include 'contentProf.php';

include 'contentCour.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style1/styles.css">
    <link rel="stylesheet" href="./css/huta-icons/huta-icons.css">
    <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <i class="bi bi-speedometer"></i>
                        <span class="nav-iten">Admin</span>
                    </a></li>
                <li><a href="#">
                        <i class="bi bi-graph-up"></i>
                        <span class="nav-item">Dashboard</span>
                    </a></li>
                <li><a href="Prof.php">
                        <i class="bi bi-person-fill"></i>
                        <span class="nav-item">Professeurs</span>
                    </a></li>
                <li><a href="Etudiant.php">
                        <i class="bi bi-people-fill"></i>
                        <span class="nav-item">Etudiants</span>
                    </a></li>
                <li><a href="Cour.php">
                        <i class="bi bi-receipt"></i>
                        <span class="nav-item">Cours</span>
                    </a></li>
                <li><a href="#">
                        <i class="bi bi-pencil-square"></i>
                        <span class="nav-item">Promotion</span>
                    </a></li>
                <li><a href="#">
                        <i class="bi bi-stack"></i>
                        <span class="nav-item">Lien</span>
                    </a></li>
                <li><a href="#">
                        <i class="bi bi-gear-fill"></i>
                        <span class="nav-item">Paramètre</span>
                    </a></li>

                <li><a href="index.php" class="logout">
                        <i class="bi bi-box-arrow-right"></i>
                        <span class="nav-item">Déconnexion</span>
                    </a></li>
            </ul>
        </nav>


        <section class="main">

            <section id="content">

                <main>

                    <ul class="box-info">
                        <li>
                            <i class='bx bxs-calendar-check'></i>
                            <span class="text">
                                <h3><?php echo $somme; ?></h3>
                                <p>Etudiant</p>
                            </span>
                        </li>
                        <li>
                            <i class='bx bxs-group'></i>
                            <span class="text">
                                <h3><?php echo $som; ?> </h3>
                                <p>Nbr Professeur</p>
                            </span>
                        </li>
                        <li>
                            <i class='bx bxs-book'></i>
                            <span class="text">
                                <h3><?php echo $somCour; ?></h3>
                                <p>Nbre cours</p>
                            </span>
                        </li>
                    </ul>
                </main>
            </section>



            <div class="row">
            <div class="containers">
<h1>AJouter un professeur</h1>

<form action="enregistreProf.php " method="POST" class="col-md-6">
    <div class="row">
        <div class="col-md-4">
            <input type="text" name="nom" class="form-control" placeholder="First name">
        </div>
        <div class="col-md-4">
            <input type="text" name="prenom" class="form-control" placeholder="Last name">

        </div>
    </div>
    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
    <div class="input-group mb-2 mr-sm-2">
        <input type="text" name="email" class="form-control" id="inlineFormInputGroupUsername2" placeholder="email">
    </div>

    <button type="submit" class="btns btn-primary mb-2 mt -4">Confirm</button>

</form>
</div>
<style>
.containers {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.containers h2 {
    margin-bottom: 20px;
}

.form-label {
    font-weight: bold;
}

.form-control {
    width: 100%;
    margin: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btns {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btns:hover {
    background-color: #45a049;
}
</style>
            </div>            
    </div>
                <div class="container">        
                </div>
            <div>
                <h1>Liste etudiant</h1>
                <table class="table table-hover ">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Matricule</th>
                            <th>Email</th>
                            <th>Mot de passe</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `etudiant`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["idEtudiant"] ?></td>
                                <td><?php echo $row["nom"] ?></td>
                                <td><?php echo $row["matricule"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td><?php echo $row["password"] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row["idEtudiant"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                    <a href="delete.php?id=<?php echo $row["idEtudiant"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

           

          

    <script src="js/script.js"></script>

    <script src="./script.js"></script>
</body>

</html>