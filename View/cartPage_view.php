<?php
 if (isset($_SESSION['id'])) {

 $response= $bdd->query(" SELECT * FROM cart WHERE id_client =".$_SESSION['id']."") or die(mysql_error());
 $results = $response->fetchAll();
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
    <section class="cartcontainer">
        <h1>Your cart :</h1>
        <div class="cartcontent">
            <div> <?php if (isset($_SESSION['id'])) { ?>
                <?php foreach ($results as $result) { ?>
                <?php echo 'Your Product : '.$result['name']; ?>
                <br/>
                <?php echo 'Your Quantity : '.$result['quantity']; ?>
                <br/>
                 <img class="cartproductimage" src="Image/<?php echo $result['image_produit'];?>"/>
                <br/>
                <?php echo 'Your Product Price : '.$result['unit_price']."€"; ?>
                <br/>
                <br/>
                <button>Remove</button>
              <?php  }} else {

              echo("Cart only available for client with an account");
          }
              ?>
            </div>        
        </div>
    </section>
    
</body>
</html>
