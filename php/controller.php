<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "site_perso";


    if(isset($_POST['insert'])){

        // erreurs
        $errors = [];

        // récupérer les valeurs 
        $first_name = $_POST['first_name'];
        $name = $_POST['lastname']; 
        $email = $_POST['email'];
        $Tmessage = $_POST['text_message'];
        $objets = $_POST['objets'];

        // Verification si remplis
        if(!array_key_exists('first_name', $_POST  ) ||$_POST['first_name'] == ''){
          $errors['first_name'] = "Vous n'avez pas mis vôtre prénom";
        }

        if(!array_key_exists('lastname', $_POST  ) ||$_POST['lastname'] == ''){
          $errors['name'] = "Vous n'avez pas mis vôtre nom";
        }

        if(!array_key_exists('email', $_POST  ) ||$_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
          $errors['email'] = "Vous n'avez pas mis vôtre email";
        }

        if(!array_key_exists('objets', $_POST  ) ||$_POST['objets'] == ''){
          $errors['objets'] = "Vous n'avez pas choisis un sujet";
        }

        if(!array_key_exists('text_message', $_POST  ) ||$_POST['text_message'] == ''){
          $errors['Tmessage'] = "Vous n'avez pas mis de message";
        }
        
        
        session_start();

        if(!empty($errors)){
          $_SESSION['errors'] = $errors;
          $_SESSION['inputs'] = $_POST;
          header("Location: http://localhost/portfolio/");
        }else{
          $_SESSION['success'] = 1;
          header("Location: http://localhost/portfolio/");
          
          try {
            // se connecter à mysql
            $pdo = new PDO("mysql:host=$host;dbname=$database","$username","$password");
            } catch (PDOException $exc) {
              echo $exc->getMessage();
              exit();
            }

          // Requête mysql pour insérer des données
          $sql = "INSERT INTO form (firstname, lastname, email,message,objets) VALUES (:first_name,:lastname,:email,:text_message,:objets)";
          $res = $pdo->prepare($sql);
          $exec = $res->execute(array("first_name"=>$first_name,"lastname"=>$name,"email"=>$email,"text_message"=>$Tmessage,"objets"=>$objets));

          // vérifier si la requête d'insertion a réussi
          if($exec){
           mail('ugorastell.dev@gmail.com', $objets, $Tmessage, "FROM: $email");
          }else{
           echo "Échec de l'opération d'insertion";
          }
      }
      }
      ?>