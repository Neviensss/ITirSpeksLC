<?php 
    session_start();
    if(isset($_SESSION['lietotajvards'])){
?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT ir spēks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo"><img src="images/logo.png" alt="logo"></div>
        <h1>IT ir spēks</h1>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Sākums</a></li>
                <li><a href="news.php">Aktualitātes</a></li>
                <li><a href="vakances.php">Vakances</a></li>
                <li><a id="about" href="par.php">Par mums</a></li>
                <li><a href="admin.php">Pārvaldība</a></li>
                <li><a href="login.php"><i class="fas fa-user"></i></a></li>
                <li><a href="faili/logout.php" name="logout"><i class="fas fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
    </header>
</body>
<?php
    }else{
        ?>
            <!DOCTYPE html>
            <html lang="lv">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>IT ir spēks</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
                <link rel="stylesheet" href="style.css">
            </head>
            <body>
                <header>
                    <div class="logo"><img src="images/logo.png" alt="logo"></div>
                    <h1>IT ir spēks</h1>
                    <nav class="navbar">
                        <ul>
                            <li><a href="index.php">Sākums</a></li>
                            <li><a href="news.php">Aktualitātes</a></li>
                            <li><a href="vakances.php">Vakances</a></li>
                            <li><a id="about" href="par.php">Par mums</a></li>
                            <li><a href="login.php"><i class="fas fa-user"></i></a></li>
                        </ul>
                    </nav>
                </header>
            </body>
<?php
    }
    if(isset($_GET['logout'])){
        session_destroy();
    }
?>