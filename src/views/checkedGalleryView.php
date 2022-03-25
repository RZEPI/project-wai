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
    <style>
        .imageContainer
        {float: left;margin: 1em;}
        #saveCheck
        {
            width: 20em;
            margin-left: 2em;
            margin-top: 13em;
        }
    </style>    
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
        <div id="err">
            <?php echo $err;?>
        </div>
        <div id="gallery">
            <form action="checkedGallery.php" method="get">
            <?php foreach($arr as $key): ?>
                <div class="imageContainer">
                    <a href="images/<?php echo 'WM'. $key['_id'] . '.' . $key['typeOfImg'] ?>">
                        <img src="images/<?php echo 'min'.$key['_id'] . '.' . $key['typeOfImg'] ?>" alt="image">
                    </a>
                    <br><input type="checkbox" name="checked[]" value="<?php echo $key['_id'];?>">
                </div>
            <?php endforeach; ?>
            <input type="submit" value="Usuń zaznaczone z zapamiętanych" id="saveCheck">
            </form>
        </div>
    </article>
    <footer>
        <div>
            
        </div>
        <div id="copyright">
            <span>&copy; Paweł Rzepecki <br> nr albumu: 191703 <br></span>
        </div>
        
    </footer>
</body>
</html>