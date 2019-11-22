<?php
$response = $bdd->query("SELECT * FROM products"); 
$results = $response->fetchAll();

    if( isset($_POST["add"]))
    {
        $id = $_POST['productid'];
        $name = $_POST['productname'];
        $productprice = $_POST['productprice'];
        $quantity = $_POST['quantity'];
        $image_produit= $_POST['image_produit'];
        $idclient = $_SESSION['id'];
        $req = $bdd->exec("INSERT INTO cart ( id_client, id, name , quantity, unit_price, image_produit)  VALUES ('".$idclient."', '".$id."', '".$name."', '".$quantity."', '".$productprice."', '".$image_produit."') " );
    }
?>