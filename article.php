<?php

include_once 'includes/products.php';
include_once 'includes/articles.php';


$articleId = $_GET['id'];
$products = getProductsByArticle($articleId);
$article = getArticle($articleId);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style copy.css">

</head>

<body>
<?php
include_once 'includes/header.php';
?>





    <main class="container">
        <h1 class="text-center">Articles</h1>
        <section>
            <h2>
                <?php echo htmlspecialchars($article['name']); ?>
            </h2>
            <div class="row">

                <?php foreach ($products as $product) {?>

                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="<?php echo htmlspecialchars($product['image']); ?>" alt="">
                        </div>
             <figcaption class="px-3 py-2">
                            <h3 class="h5">
                                <?php echo htmlspecialchars($product['name']); ?>
                            </h3>
                            <div class="details">
           <h5 classe='titre_description'>Description</h5>
                 <p class="description">
                   <?php echo htmlspecialchars($product['description']); ?>
                 </p>
         </div>

                        </figcaption>
                    </figure>
                </article>
                <?php } ?>
            </div>


        </section>
    </main>



 <!--  
                        <div class= "image_article">
                            <img class="imagearticle" src="<?php echo htmlspecialchars($product['image']); ?>" alt="">
                        </div>


    <div id="det">
        <div class="ajoutpanier">
            <button class="ajout" type='submit'>Ajouter au panier</button>
        </div>
        <div class="details">
           <h5 classe='titre_description'>Description</h5>
                 <p class="description">
                   <?php echo htmlspecialchars($product['description']); ?>
                 </p>
         </div>

         </div>

-->





    <?php

  require_once 'includes/footer.php';

?>