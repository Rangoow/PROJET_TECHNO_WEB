
<?php
include 'bdd.php';
$output='';
$outputImage='';

if(isset($_POST['search'])) {
    $xsearch = $_POST['search'];

    $query = $bdd->query(" SELECT * FROM products WHERE name = '$xsearch' ") or die(mysql_error());
    $query->execute();
    //$result = $query->fetch();
    //echo($result[0]);
     if($row = $query->fetch() ) {

            $xname = $row['name'];
            $xdescription = $row['description'];
            $ximage_produit = $row['image_produit'];

            $output = '<br>'.$xname.'<br>'.$xdescription.'<br>';
            $outputImage=$ximage_produit;

        }
else { $output = "This product doesn't exists"; }


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
    <?php include 'header.php'?>

    <form action="searchPage.php" method="post">
        <input type="text" name="search" placeholder="Looking for a product ?" />
        <input type="submit" value="Search" />
    </form>

   <?php echo($output) ;?>
   <img src="<?php echo $outputImage ?>" />

    <?php include 'footer.php'?>
</body>
</html>
