<header>
  <?php $bdd = new PDO('mysql:host=localhost;dbname=projet_techno_web','root',''); ?>
<div class="navBar">
    <a id="headerTitle" href="index.php?page=mainPage">MyChiliPepper</a>
    <a class="titleCategory" href="index.php?page=productPage">PRODUCTS</a>
    <a class="titleCategory" href="index.php?page=searchPage">SEARCH</a>
    <a class="titleCategory" href="index.php?page=cartPage">CART</a>
 
    <div class="log-container">
      <form action="#">
        <input type="text" placeholder="Username" name="Username">
        <input type="Password" placeholder="Password" name="Password">
        <button class="titleCategory"  href="index.php?page=mainPage">LOGIN</button>
      </form>
    </div>
    <div class="log-container">

        <a class="titleCategory" href="index.php?page=createAccountPage">SIGN UP</a>

    </div>
</div>
</header> 

