<?php
if(isset($_GET['username']) AND isset($_GET['email']) AND isset($_GET['password']) ){
                $mailconnect = $_GET['email'];
                $mdpconnect = $_GET['password'];
                if(!empty($mailconnect) AND !empty($mdpconnect)){
                    $requser = $bdd->prepare("SELECT * FROM users WHERE email = '".$mailconnect."' AND password = '".$mdpconnect."'" );
                    $requser->execute();
                    $userexist =$requser->rowCount();
                    if ($userexist==1){
                        $userinfo=$requser->fetch();
                        $_SESSION['id']=$userinfo['id'];
                        $_SESSION['username']=$userinfo['username'];
                        $_SESSION['email']=$userinfo['email'];
                        header("Location: index.php");
                        
                    }
                    else{
                        $erreur="email ou mot de passe incorrect !!!";
                        echo($erreur);
                    }
                }
}
?>