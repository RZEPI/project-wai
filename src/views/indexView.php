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
    <link rel="stylesheet" href="static/styleGal.css">
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
        <div id="err">
            <?php echo $err;?>
        </div>
        <form method="post" action="index.php" enctype="multipart/form-data">
            <input type="file" name="image">
            <label for="watermark">Znak wodny</label> <input type="text" name="watermark" required><br>
            <label for="title">Tytuł</label><input type="text" name="title" required>&nbsp;&nbsp;&nbsp;&nbsp;<label for="author">Autor</label><input type="text" name="author" required><br>
            <input type="submit" value="Wyślij" id="sub">
        </form>
        <div id="gallery">
            <a href="?page=<?php echo --$page; ++$page?>"> < </a>
            <form action="index.php" method="get">
            <?php foreach($dataFromDB as $index =>$key): ?>
                <?php if($index >= $page*3 && $index < ($page*3)+3): ?>
                    <div class="imageContainer">
                        <a href="images/<?php echo 'WM'. $key['_id'] . '.' . $key['typeOfImg'] ?>">
                            <img src="images/<?php echo 'min'.$key['_id'] . '.' . $key['typeOfImg'] ?>" alt="image">
                        </a>
                        <p>
                            Tytuł: <?php echo $key['title']?><br>
                            Author: <?php echo $key['author'] ?><br><input type="checkbox" name="checked[]" value="<?php echo $key['_id'];?>" <?php if(in_array($key['_id'], $_SESSION['gal'])) echo 'checked'?>>
                        </p>
                    </div>
                <?php endif;?>
            <?php endforeach; ?>
            <input type="submit" value="Zapamiętaj wybrane" id="saveCheck">
            </form>
            <a href="?page=<?php echo ++$page; ?>"> > </a>
        </div>
    </article>
    <footer>
        <div>

        </div>
        <div id="copyright">
            <span>&copy; Paweł Rzepecki <br> nr albumu: 191703 <br><a href="checkedGallery.php" >Galeria z zaznaczonymi zdjęciami</a></span>
        </div>
        
    </footer>
</body>
</html>