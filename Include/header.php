<header>

  <?php $bdd = new PDO('mysql:host=localhost;dbname=projet_techno_web','root','');
    include'Action/signin_action.php';
  ?>
<div class="navBar">
    <a id="headerTitle" href="index.php?page=mainPage">MyChiliPepper</a>
    <a class="titleCategory" href="index.php?page=productPage">PRODUCTS</a>
    <a class="titleCategory" href="index.php?page=searchPage">SEARCH</a>
    <a class="titleCategory" href="index.php?page=cartPage">CART</a>

    <div class="log-container">
    <?php
      if (isset($_SESSION['username'])){?>
        <div id="sessionInfo">Bonjour  <?php echo($_SESSION['username']); ?>
        
        <br>Votre email est : <?php echo $_SESSION['email']; ?>
        </div>
        <div class="log-container">
          <a class="titleCategory" href="index.php?page=disconnect">LOG OUT</a>
        </div>
<?php 
      } else {
?>

     <form methode="post" action="index.php">
        <input type="hidden" name="page" value="mainPage">
        <input type="text" placeholder="Username" name="username">
        <input type="text" placeholder="Email" name="email">
        <input type="Password" placeholder="Password" name="password">
        <button type="submit" class="titleCategory" name="loginbtn">LOGIN</button>
      </form>
      
    </div>
    <div class="log-container">
        <a class="titleCategory" href="index.php?page=createAccountPage">SIGN UP</a>
    </div>
    <?php } ?>
</div>
</header> 

