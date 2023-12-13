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
    body{
        padding: 90px;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 50px;
        border: 1px solid #000;
        border-radius: 5px;
        background: #ccc;
    }
    
    .container h2 {
        margin-bottom: 20px;
    }
    
    .form-label {
        font-weight: bold;
    }
    
    .form-control {
        width: 100%;
        margin: 15px;
        padding: 10px;
        border: 1px solid #000;
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
    <div class="container">
    <div class="row">
        <div class="containers mt-5 col-md-6" style="margin-top: 50px;">
            <h2>Ajouter cours</h2>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="file" class="form-label">Sélectionner un fichier</label>
                    <input type="file" class="form-control" name="file" id="file">
                </div>
                <button type="submit" class="btns btn-primary">Uploader le fichier</button>
            </form>
            </div>
    </div>
    </div>
    <script src="js/script.js"></script>

    <script src="./script.js"></script>
</body>
</html>