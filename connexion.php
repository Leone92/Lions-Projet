<?php 
    session_start(); // Démarrage de la session
    $db = new PDO('mysql:host=localhost;dbname=projet_lions;charset=utf8', 'projet_lions', 'projetlions');

    if(!empty($_POST['email']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $email = strtolower($email); // email transformé en minuscule
        
        
        if($row > 0)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                if(password_verify($password, $data['password']))
                {
                    // On créer la session et on redirige sur landing.php
                    $_SESSION['user'] = $data['email'];
                    header('Location: landing.php');
                    die();
                }else{ header('Location: indexx.php?login_err=password'); die(); }
            }else{ header('Location: indexx.php?login_err=email'); die(); }
        }else{ header('Location: indexx.php?login_err=already'); die(); }
    }else{ header('Location: indexx.php'); die();} // si le formulaire est envoyé sans aucune données