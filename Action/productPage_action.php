<?php
$response = $bdd->query("SELECT * FROM products"); 
$results = $response->fetchAll();

    if( isset($_POST["add"])  )
    {
        $id = $_POST['productid'];
        $name = $_POST['productname'];
        $productprice = $_POST['productprice'];
        $quantity = $_POST['quantity'];
        $image_produit= $_POST['image_produit'];
        
        $req = $bdd->exec("INSERT INTO cart ( id, name , quantity, unit_price, image_produit)  VALUES ('".$id."', '".$name."', '".$quantity."', '".$productprice."', '".$image_produit."') " );
    }
?>