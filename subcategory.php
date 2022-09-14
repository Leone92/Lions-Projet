<?php

include_once 'includes/products.php';
include_once 'includes/subcategories.php';


$subcategoryId = $_GET['id'];
$products = getProductsBysubCategory($subcategoryId);
$subcategory = getsubCategory($subcategoryId);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sous-catégories</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<?php
include_once 'includes/header.php';



?>

    <main class="container">
    <h1 class="text-center">sous-Catégorie</h1>
        <section>
            <h2><?php echo htmlspecialchars($subcategory['name']); ?></h2>
            <div class="row">
                <?php foreach ($products as $product) {?>
                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5"><?php echo htmlspecialchars($product['name']); ?></h3>
                            <p class="m-0"><?php echo number_format($product['price'], 2, '€', ' '); ?></p>
                        </figcaption>
                    </figure>
                </article>
                <?php } ?>
            </div>
        </section>
    </main>


<?php

  require_once 'includes/footer.php';

?>