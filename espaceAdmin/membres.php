<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=site_perso', 'root', '');
if(!$_SESSION['mdp']){
    header("Location: http://localhost/portfolio/espaceAdmin/connexion.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher les membres</title>
</head>
<body>
    <?php
    $recupUsers = $bdd->query('SELECT * FROM membres');
    while($user = $recupUsers->fetch()){
        ?>       
        <p><?= $user['pseudo']; ?> <a href="/portfolio/espaceAdmin/ban.php?id=<?= $user['id']; ?>" style="color:red; text-decoration:none;">Bannir le membre</a></p>
    <?php
    }
    ?>
</body>
</html>