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
    <?php include 'header.php'?>
    <section>
    <form action="action_page.php">
        <div class="container">
            <label for="login"><b>Login</b></label>
            <input class="registerFields" type="text" placeholder="Login" name="Login" required>

            <label for="password"><b>Password</b></label>
            <input class="registerFields" type="password" placeholder="Password" name="Password" required>

            <label for="first-name"><b>First name</b></label>
            <input class="registerFields" type="text" placeholder="First name" name="First-name" required>

            <label for="last-name"><b>Last name</b></label>
            <input class="registerFields" type="text" placeholder="Last name" name="Last-name" required>

            <label for="last-name"><b>Adress</b></label>
            <input class="registerFields" type="text" placeholder="Adress" name="Adress" required>

            <label for="city"><b>City</b></label>
            <input class="registerFields" type="text" placeholder="City" name="City" required>

            <label for="email"><b>Email</b></label>
            <input class="registerFields" type="text" placeholder="Email" name="Email" required>

            <div class="registerbtnContainer">
                <button type="submit" class="registerbtn">Register</button>
            </div>
        </div>
    </form>
    </section>
    <?php include 'footer.php'?>
</body>
</html>
