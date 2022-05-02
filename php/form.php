<?php
$message = $_POST['message'];
$headers ='FROM: site@local.dev';

mail('ugorastell.dev@gmail.com', 'Formulaire de contact', $message, $headers);
