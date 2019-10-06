<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" href="headercss.css" />
        <title>myPEZ</title>
    </head>

    <body>
        <img src="header_image.jpg" alt="photodepez" />
    	<balise1> myPEZ </balise1> 
    	<balise2> ça pez ! </balise2>

        <balise4> 
         <a class="lien" href="productpage.php"> Nos Produits en vente</a> 
         <a class="lien" href="searchpage.php"> | Rechercher un produit</a>
        <balise4/>


        <balise3>
        <form method="post" action="productpage.php" >
            <label for="nom">Pseudo ? : </label>
            <input type="text" name="pseudo" id="pseudo"><br><br>

            <label for="age">Mot de Passe ? :</label>
            <input type="password" name="pseudo" id="pseudo"><br><br>
        

            <input type="submit" value="Connexion"/>
          </form>

        <balise3/>




    

    	
        

        
    </body>
</html>