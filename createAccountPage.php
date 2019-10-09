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
        <?php include 'header.php'?>
    </section>
    <section>
        <div>
            <form action="main.php">
                <div class="containerFormSignUp">
                <label for="inputLogin">Login</label>
                <div>
                    <input type="text" id="inputLogin" nmae="login" class="inputBox" placeholder="login">
                </div>
                </div>
            </form>
        </div>
    </section>
    <?php include 'footer.php'?>
</body>
</html>
