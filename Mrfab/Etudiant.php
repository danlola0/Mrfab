<?php
//database connection details

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mydb";

 $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


 if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }


 $sql = "SELECT *FROM cours";
 $result = $conn->query($sql);

 $sql1 = "SELECT *FROM professeur";

 $result1 = $conn->query($sql1);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Etudiant</title>
    <link rel="stylesheet" href="style1/huta.css">
	<script src="css/jquery-ui.css"></script>
    <script src="css/all.min.css"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="container mt-5">
        <h2>Bienvenue dans le dashboard</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nom ducour</th>
                    <th>Taille du cour</th>  
                    <th>Nom du Professeur</th>
                    <th>Telechargement</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // visualiser dans un tableau
                if ($result->num_rows > 0 && $result1->num_rows > 0 ) {
                    while (($row = $result->fetch_assoc()) && ($row1 = $result1->fetch_assoc())) {
                        $file_path = "uploads/" . $row['nom'];
                        ?>
                        <tr>
                            <td><?php echo $row['nom']; ?></td>
                            <td><?php echo $row['taillefichier']; ?> bytes</td>
                            <td><?php echo $row1['nom'];?></td>
                            <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>

                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="4">No files uploaded yet.</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
</body>
</html>

<?php
$conn->close();
?>
