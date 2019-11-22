<?php
$output='';
$outputImage='none.png';

if(isset($_POST['search'])) {
    $xsearch = $_POST['search'];

    $query = $bdd->query(" SELECT * FROM products WHERE name LIKE '%$xsearch%' ") or die(mysql_error());
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