<?php
<<<<<<< HEAD
$errors = [];

if(!array_key_exists('first_name', $_POST) || $_POST['first_name'] == ''){
    $errors['first_name'] = "Manque le prenom";
}

if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
    $errors['name'] = "Manque le nom";
}

if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Manque l'email";
}

if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Manque le message";
}

if(array_key_exists('service', $_POST) && isset($emails[$_POST['service']])){
    $errors['service'] = "Le service n existe pas";
}

session_start();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: /portfolio/');
}else{
    $_SESSION['success'] = 1;
    $message = $_POST['message'];
    $headers ='FROM: site@local.dev';
    mail('ugorastell.dev@gmail.com', 'Formulaire de contact', $message, $headers);
    header('Location: /portfolio/');
}

 
=======
$message = $_POST['message'];
$headers ='FROM: site@local.dev';

mail('ugorastell.dev@gmail.com', 'Formulaire de contact', $message, $headers);
>>>>>>> 51945e58ae469ad52e7dbbb59dd13104dda7629d
