<?php

//TODO start session


//TODO include database.php file
    //connecting to the BDD
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_techno_web;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    session_start();

//TODO get page parameter ($_GET['page'] or $_POST['page']) and 
//assign it into $page variable



//if 'action/'.$page'.php' exists then include it 
//(use file_exists($filename) function)

/*if (isset($_GET["page"])){
	
	$page = $_GET["page"];
	
	switch($page){
		case"view/view_pageachat":
		include'action/action_pageachat.php';
		break;
		
		case"view/view_pageconnexion":
		include'action/action_pageconnexion.php';
		break;
		
		case"view/view_pageinscription":
		include'action/action_pageinscription.php';
		break;
		
		case"view/view_inscriptionreussi":
		include'action/action_inscriptionreussi.php';
		break;
		
		case"view/view_pageachat":
		include'action/action_pageachat.php';
		break;
		
	}
}*/

// TODO insert the start html envelope (<html><head>....</head><body>

// TODO using $page decide to include header.php
?>
<html> 
<header>
	<meta charset="utf-8">
	<title>MyChilliPepper.com</title>
    <link rel="stylesheet" href="css/main.css">
 
  <nav>
  	<?php 
  	include'Include/header.php';
  	?>
         
<!--         <div class="menuCategory">
			<form action = "D:\wamp64\www\ProjetTechnoWeb\Projet_e-commerce_ISEN_2018_V2\verif-form.php" method = "get">
    		<input type="search" name="recherche" id="recherche" placeholder="recherche">
			<input type="submit" name="Accepter" value="Accepter">
			</form>
    	</div>
            
        <div class="menuCategory">
			<a href="index.php?page=view/view_main">Menu</a>
    	</div>

    	<div class="menuCategory">
    		<a href="index.php?page=view/view_pagepanier">Panier</a>
		</div>

    	<div class="menuCategory">
    		<a href="index.php?page=view/view_pageconnexion">Connexion</a>
		</div> -->

    </nav>
</header>
</html>

<?php
//TODO if 'view/'.$page'.php' exists then include it 
//(use file_exists($filename) function)
//else include 'view/main.php' (it has to exist)

if(isset($_GET["page"])){$page = $_GET["page"];}
else{$page = 'null';}

	
switch($page){
    
    case"mainPage":
    include'Page/main.php';
    break;


	case"productPage":
	include'Page/productPage.php';
	break;
	
	case"searchPage":
	include'Page/searchPage.php';
	break;
	
	case"createAccountPage":
	include'Page\createAccountPage.php';
	break;
	
	
	case"cartPage":
	include'Page/cartPage.php';
    break;
	
	default:
	include'Page/main.php';
	
}	
    include'Include/footer.php';
// TODO insert the end html envelope (</body></html>)
?>