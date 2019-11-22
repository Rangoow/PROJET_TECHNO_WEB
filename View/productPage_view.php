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
    <section class="productContainer"> 
        <?php foreach ($results as $result) { ?>
        <div class="product-card">
            <div ><img class="productimage" src="Image/<?php echo $result['image_produit'];?>"></div>   
            <div class="productinfo">
                <h5 class="productName">
                    <?php echo $result['name'];?>
                    </h5>
                <h6 class="productPrice"> <?php echo $result['unit_price'].'€';?></h6>
                <div class="productDescription">
                    <?php echo $result['description'];?>
                </div>
                <form method="post" action="index.php?page=productPage">
                <input type="hidden" name="image_produit" value="<?php echo $result['image_produit'];?>">
                <input type="hidden" name="productprice" value="<?php echo $result['unit_price'].'€';?>">
                <input type="hidden" name="productname" value="<?php echo $result['name'];?>">
                <input type="hidden" name="productid" value="<?php echo $result['id'];?>">
                <input type="number" name="quantity" value="1" >
                </br>
                <?php
                if (isset($_SESSION['username'])){?>
                <input type="submit" name="add" value="Add to Cart" class="addtocartBtn">
                
                <?php } else {
                    echo('You should be connected !');}?>
            </form>
            </div>
        </div>
        <?php } ?>
    </section>
</body>
</html>