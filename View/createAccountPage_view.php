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
    <section>
    <form methode="get" action="index.php">
        <input type="hidden" name="page" value="createAccountPage">
        <div class="container">
            <label for="login"><b>Login</b></label>
            <input class="registerFields" type="text" placeholder="Login" name="username" required>

            <label for="password"><b>Password</b></label>
            <input class="registerFields" type="password" placeholder="Password" name="password" required>

            <label for="password"><b>Password Confirmation</b></label>
            <input class="registerFields" type="password" placeholder="Password" name="confirmation" required>

            <!--
            <label for="first-name"><b>First name</b></label>
            <input class="registerFields" type="text" placeholder="First name" name="firstName" required>

            <label for="last-name"><b>Last name</b></label>
            <input class="registerFields" type="text" placeholder="Last name" name="lastName" required>
            
            <label for="Adress"><b>Adress</b></label>
            <input class="registerFields" type="text" placeholder="Adress" name="Adress" required>
            
            <label for="city"><b>City</b></label>
            <input class="registerFields" type="text" placeholder="City" name="city" required>
            -->


            <label for="email"><b>Email</b></label>
            <input class="registerFields" type="text" placeholder="Email" name="email" required>

            <div class="registerbtnContainer">
                <button name ="register" type="submit" class="registerbtn">Register</button>
            </div>
        </div>
    </form>
    </section>
    <div id="registermsg">
        <?php echo messageConnect($results, $req);?>
    </div>
</body>
</html>
