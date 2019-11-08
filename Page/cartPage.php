<?php
 $response= $bdd->query(" SELECT * FROM cart ") or die(mysql_error());
 $results = $response->fetchAll();

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
            <div>
                <?php foreach ($results as $result) { ?>
                <?php echo $result['name']; ?>
                <br/>
                <?php echo $result['quantity']; ?>
                <br/>
                 <img src="Image/<?php echo $result['image_produit'];?>"/>
                <br/>
                <?php echo $result['unit_price']; ?>


              <?php  } ?>  

            </div>        </div>
    </section>
</body>
</html>

