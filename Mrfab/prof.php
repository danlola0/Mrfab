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
    <title>Document</title>
    <link rel="stylesheet" href="style1/styles.css">
    <link rel="stylesheet" href="./css/huta-icons/huta-icons.css">
    <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
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
    
<body>
    <div>

        <h1>Liste de Professeur</h1>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cour</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `professeur`";
                $index = 1;
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $index; ?></td>
                        <td><?php echo $row["nom"] ?></td>
                        <td><?php echo $row["prenom"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["cours"] ?></td>

                    </tr>
                <?php
                    $index++;
                }
                ?>
            </tbody>

        </table>
    </div>
    <script src="js/script.js"></script>

    <script src="./script.js"></script>
</body>
</html>