<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyChiliPepper</title>
    <link rel="stylesheet" href="CSS\common.css">
    <link rel="stylesheet" href="CSS\header.css">
    <link rel="stylesheet" href="CSS\footer.css">
    <link rel="stylesheet" href="CSS\main.css">
</head>

<body>

    <?php include 'header.php' ?>
    <section class="productContainer"> 
    <div class="product-card">
        <div ><img class="productimage" src="<?php $reponse = $bdd->query("SELECT image_produit FROM products WHERE id = 2 "); $results = $reponse->fetch();
                echo $results[0]; ?>"></div>   
        <div class="productinfo">
            <h5 class="productName">
                <?php $reponse = $bdd->query("SELECT name FROM products WHERE id = 2 "); $results = $reponse->fetch();
                echo $results[0]; ?>
                 </h5>
            <h6 class="productPrice"> 
                <?php $reponse = $bdd->query("SELECT unit_price FROM products WHERE id = 2 "); $results = $reponse->fetch();
                echo $results[0].'€'; ?> </h6>
            <div class="productDescription">
                <?php $reponse = $bdd->query("SELECT description FROM products WHERE id = 2 "); $results = $reponse->fetch();
                echo $results[0]; ?>
            </div>
            <button class="addtocartBtn">Add to Cart</button>
        </div>
    </div>
    <div class="product-card">
        <div ><img class="productimage" src="<?php $reponse = $bdd->query("SELECT image_produit FROM products WHERE id = 3 "); $results = $reponse->fetch();
                echo $results[0]; ?>"></div>   
        <div class="productinfo">
            <h5 class="productName">
                <?php $reponse = $bdd->query("SELECT name FROM products WHERE id = 3 "); $results = $reponse->fetch();
                echo $results[0]; ?>
            </h5>
            <h6 class="productPrice">
                <?php $reponse = $bdd->query("SELECT unit_price FROM products WHERE id = 3 "); $results = $reponse->fetch();
                echo $results[0].'€'; ?></h6>
            <div class="productDescription">
            <?php $reponse = $bdd->query("SELECT description FROM products WHERE id = 3 "); $results = $reponse->fetch();
                echo $results[0]; ?>
             </div>
            <button onclick="<?php $sql = $bdd->query("INSERT INTO  cart (id,name,unit_price,image_produit) values ('3','Trinidad Moruga','13.99','Image/TrinidadMoruga.jpg' "); ?>" class="addtocartBtn">Add to Cart</button>

        </div>
    </div>
    <div class="product-card">
        <div ><img class="productimage" src="<?php $reponse = $bdd->query("SELECT image_produit FROM products WHERE id = 4 "); $results = $reponse->fetch();
                echo $results[0]; ?>"></div>   
        <div class="productinfo">
            <h5 class="productName">
                <?php $reponse = $bdd->query("SELECT name FROM products WHERE id = 4 "); $results = $reponse->fetch();
                echo $results[0]; ?>
            </h5>
            <h6 class="productPrice">
                <?php $reponse = $bdd->query("SELECT unit_price FROM products WHERE id = 4 "); $results = $reponse->fetch();
                echo $results[0].'€'; ?>
            </h6>
            <div class="productDescription">
                <?php $reponse = $bdd->query("SELECT description FROM products WHERE id = 4 "); $results = $reponse->fetch();
                echo $results[0]; ?>
            </div>
            <button class="addtocartBtn">Add to Cart</button>

        </div>
    </div>
    <div class="product-card">
        <div ><img class="productimage" src=" <?php $reponse = $bdd->query("SELECT image_produit FROM products WHERE id = 5 "); $results = $reponse->fetch();
                echo $results[0]; ?>"></div>   
        <div class="productinfo">
            <h5 class="productName">
                <?php $reponse = $bdd->query("SELECT name FROM products WHERE id = 5 "); $results = $reponse->fetch();
                echo $results[0]; ?>
            </h5>
            <h6 class="productPrice">
                <?php $reponse = $bdd->query("SELECT unit_price FROM products WHERE id = 5 "); $results = $reponse->fetch();
                echo $results[0].'€'; ?>
            </h6>
            <div class="productDescription">
                <?php $reponse = $bdd->query("SELECT description FROM products WHERE id = 5 "); $results = $reponse->fetch();
                echo $results[0]; ?>
            </div>
            <button class="addtocartBtn">Add to Cart</button>

        </div>
    </div>
    </section>
    <?php include 'footer.php' ?>
</body>
</html>
