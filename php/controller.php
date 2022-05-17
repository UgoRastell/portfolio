<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "site_perso";

    if(isset($_POST['insert'])){
        try {
        // se connecter à mysql
        $pdo = new PDO("mysql:host=$host;dbname=$database","$username","$password");
        } catch (PDOException $exc) {
          echo $exc->getMessage();
          exit();
        }

        // récupérer les valeurs 
        $first_name = $_POST['first_name'];
        $name = $_POST['lastname']; 
        $email = $_POST['email'];
        $Tmessage = $_POST['text_message'];

        // Requête mysql pour insérer des données
        $sql = "INSERT INTO users (firstname, lastname, email,message) VALUES (:first_name,:lastname,:email,:text_message)";
        $res = $pdo->prepare($sql);
        $exec = $res->execute(array("first_name"=>$first_name,"lastname"=>$name,"email"=>$email,"text_message"=>$Tmessage));

        // vérifier si la requête d'insertion a réussi
        if($exec){
          echo 'Données insérées';
        }else{
          echo "Échec de l'opération d'insertion";
        }
      }
      ?>