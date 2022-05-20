<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=site_perso', 'root', '');

if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupUsers = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $recupUsers->execute(array($getid));
    if($recupUsers->rowCount() > 0){
        
        $bannirUser =  $bdd->prepare('DELETE FROM membres WHERE  id = ?');
        $bannirUser->execute(array($getid));

        header('Location: /portfolio/espaceAdmin/membres.php');

    
    }else{
        echo "Aucun membre a ete trouvé";
    }
}else{
    echo 'Identifiant non recuperer';
}
?>