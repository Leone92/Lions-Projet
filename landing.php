<?php 

   
session_start();


    // si la session existe pas soit si l'on est pas connecté on redirige
  
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:indexx.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $db->prepare('SELECT * FROM `users` WHERE `email` = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();

?>


<!doctype html>
<html lang="fr">