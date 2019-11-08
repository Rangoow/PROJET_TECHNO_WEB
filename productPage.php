
<?php
    session_start();
    include 'bdd.php';


$response = $bdd->query("SELECT * FROM products"); 
$results = $response->fetchAll();


function ajouterArticle()
{
    if(isset($_POST["add"]))
    {
        {
        $name = $result['name'];
        $unit_price = $result['unit_price'];
        $image_produit = $result['image_produit'];
        $quantity = $_POST['quantity'];
        }



        $req = $bdd->query('INSERT INTO `cart` (`name`, `quantity`, `unit_price`, `image_produit`) 
            VALUES ($name, $quantity, $unit_price, $image_produit)' );

        $req->execute();
        // je n'ai pas réussi à inserer dans la base de donnée
    }

   
}

?>






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
        <?php foreach ($results as $result) { ?>
    <div class="product-card">
        <div ><img class="productimage" src="<?php echo $result['image_produit'];?>"></div>   
        <div class="productinfo">
            <h5 class="productName">
                <?php echo $result['name'];?>
                 </h5>
            <h6 class="productPrice"> <?php echo $result['unit_price'].'€';?></h6>
            <div class="productDescription">
                <?php echo $result['description'];?>
            </div>
            <form method="post" action="productPage.php">
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="submit" name="add" value="Add to Cart" class="addtocartBtn" onclick="ajouterArticle()">
        </form>
        </div>
    </div>
<?php }?>

    </section>
    <?php include 'footer.php' ?>

</body>
</html>
