<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <link rel="icon" type="image/x-icon" href="icon.png">
    <title>Galeria</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
</head>
<body>
    <header>
        <div id="logo">
            Project
        </div>
        <div>
            
        </div>
        <a href="index.php">
            <div class="ad">
                <span>Galeria</span>
            </div>
        </a>
        <a href="register.php">
            <div class="ad">
                <span>Rejestracja</span>
            </div>
        </a>
        <a href="login.php">
            <div class="ad">
                <span>Logowanie</span>
            </div>
        </a>
    </header>
    <article>
        <form action="login.php" method="post">
            <?php if(!$flag): ?>
                    <label for="login">Login</label><input type="text" name="login" required><br>
                    <label for="psw">Hasło</label><input type="password" name="psw" required><br>
                    <input type="submit" value="Login">
            <?php else:?>
                <p>Zalogowano</p>
                <input type="hidden" name="logout">
                <input type="submit" value="Logout">
            <?php endif?>
        </form>
        
        <div id="err">
            <?php echo $err; ?>
        </div>
    </article>
    <footer>
        <div>
            
        </div>
        <div id="copyright">
            <span>&copy; Paweł Rzepecki <br> nr albumu: 191703 </span>
        </div>
        
    </footer>
</body>
</html>