<?php 
$requette = 'insert into users(username, password, email) values (:username, :password, :email)';


$req = $bdd->prepare($requette);

$requette1 = 'select username, password from users';
$req1 = $bdd->prepare($requette1);
$req1->execute(array());
$results = $req1->fetchAll();


function test_doublon($results, $usernamev, $passwordv){
    foreach ($results as $value) {
        if ($value['username'] == $usernamev || $value['password'] == $passwordv){ return false; }
    }
    return true;
}

function messageConnect ($results, $data_requette) {

    $message = "";

    if (isset($_GET['username']) AND isset($_GET['password']) AND isset($_GET['confirmation']) AND isset($_GET['email'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        if (test_doublon($results, $username, $password) == false){ $message = "Pseudo ou mot de passe déjà utilisé"; }

        else{

           	if ($_GET['password'] == $_GET['confirmation']){
          		  $data_requette->execute(array(
             	  'username' => $_GET['username'],
                  'password' => $_GET['password'],
            	  'email' => $_GET['email']));
            	  $message = "Inscription terminée, bienvenue sur le site de MyCillipeper"/*, $_GET['pseudo']*/;
    	    	}

      	    else{ $message =  "Validation du mot de passe incorrecte";}
        }
    }           

    return $message;
}
?>