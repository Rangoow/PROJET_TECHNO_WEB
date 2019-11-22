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

    <form action="index.php?page=searchPage" method="post">
        <input type="text" name="search" placeholder="Looking for a product ?" />
        <input type="submit" value="Search" />
    </form>
    <div class="searchproductdesc">
        <?php echo($output) ;?>
    </div>
    <div class="serachproductimage">
        <img class="productimage" src="Image/<?php echo $outputImage ?>" />
    </div>
</body>
</html>