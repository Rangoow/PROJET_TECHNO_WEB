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
    <?php include 'header.php'?>
    <section class="productContainer"> 
    <div class="product-card">
        <div ><img class="productimage" src="Image\CarolinaReaper.jpg"></div>   
        <div class="productinfo">
            <h5>Carolina Reaper</h5>
            <h6>14.99€</h6>
            <button class="addtocartBtn">Add to Cart</button>
        </div>
    </div>
    <div class="product-card">
        <div ><img class="productimage" src="Image\TrinidadMoruga.jpg"></div>   
        <div class="productinfo">
            <h5>Trinidad Moruga</h5>
            <h6>13.99€</h6>
            <button class="addtocartBtn">Add to Cart</button>

        </div>
    </div>
    <div class="product-card">
        <div ><img class="productimage" src="Image\ButchTaylor.jpg"></div>   
        <div class="productinfo">
            <h5>Butch Taylor</h5>
            <h6>12.99€</h6>
            <button class="addtocartBtn">Add to Cart</button>

        </div>
    </div>
    <div class="product-card">
        <div ><img class="productimage" src="Image\NagaViper.jpg"></div>   
        <div class="productinfo">
            <h5>Naga Viper</h5>
            <h6>11.99€</h6>
            <button class="addtocartBtn">Add to Cart</button>

        </div>
    </div>
    </section>
    <?php include 'footer.php'?>
</body>
</html>
