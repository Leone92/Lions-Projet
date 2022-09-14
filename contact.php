<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contact.css">
    <title>Document</title>
</head>
<body>
    <!-- changer page d'accueil -->
    <a href="./index.php">
    <img src="./Images/logo seul.png" width="90" height="70" alt="">
    </a>
    



    <section id="contact">
        <div class="container">
        <div class="title">
            <h6> Une question ? Un conseil ?</h6>
            <h3> Contactez-nous</h3>
        </div>

        <form action="./index.php" method="post">
            <input type="text" name="name" placeholder="Entrer votre nom" required="">
            <input type="email" name="email" placeholder="Entrer votre email" required="">
            <input type="text" name="subject" placeholder="Entrer le sujet de votre demande" required="">
            <input type="text" name="number" placeholder="Entrer votre numéro de téléphone" required="">
            <textarea name="message" placeholder="Entrer votre message"></textarea>
            <button type="submit">Envoyer</button>
        </form>
        </div>
    </section>
    
</body>
</html>