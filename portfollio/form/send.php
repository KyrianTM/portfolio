<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../misc/style.css">
</head>
<body>
    <header>
        <img src="../misc/me.png" alt="logo">
        <ul>
            <li>
                <a href="https://www.instagram.com/official501stlegion/"><img src="../misc/instagram.jpg" alt="instagram" width="100px" height="100px"></a>
            </li>
            <li>
                <a href="https://twitter.com/arcade_legion"><img src="../misc/twitter.jpg" alt="twitter" width="100px" height="100px"></a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCirXSHFjN9hppSrkXCMk8Lw/featured"><img src="../misc/youtube.png" alt="youtube" width="100px" height="100px"></a>
            </li>
        </ul>
    </header>
    <nav>
        <ul>
            <li><a href="../index.html">home</a></li>
            <li><a href="../werk/">werkplekleren</a></li>
            <li><a href="../over_mij/">over mij</a></li>
            <li><a href="../project/">projecten</a></li>
            <li><a href="../form/">contact formulier</a></li>
        </ul>
    </nav>
    <main>
        <h1>ingevulde gegevens</h1>
        <?php
    if(isset($_POST['submit'])){
        echo $_POST['mail']."<br>".$_POST['geslacht']."<br>".$_POST."<br>".$_POST['comment'];
    }
    ?>
    </main>
    <footer>
        <span>dit is tekst voor de footer</span>
    </footer>
</body>
</html>