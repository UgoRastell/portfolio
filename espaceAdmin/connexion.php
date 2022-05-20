<?php 
    session_start();
    if(isset($_POST['valider'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
            $pseudo_par_default = "admin";
            $mdp_par_default = "1234";

            $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
            $mdp_saisi = htmlspecialchars($_POST['mdp']);

            if($pseudo_saisi == $pseudo_par_default AND $mdp_saisi == $mdp_par_default){
                $_SESSION['mdp'] = $mdp_saisi;
                header("Location: http://localhost/portfolio/admin");
            }else{
                echo "Votre mot de passe ou votre pseudo est incorrect";
            }
        }else{
            echo "Veuillez compléter tous les champs...";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles/styles.scss">
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>espaceAdmin</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="pseudo" autocomplete="off">
        <p></p>
        <input type="password" name="mdp">
        <p></p><p></p>
        <input type="submit" name="valider">
    </form>
</body>
</html>
