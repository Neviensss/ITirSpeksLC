<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vakances</title>
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
                <li><a id="about" href="par.php">Par mums</a></li>
                <li><a href="login.php"><i class="fas fa-user"></i></a></li>
            </ul>
        </nav>
    </header>
    <section id="news">
        <h1>Vakances</h1>
        <div class="box-container">
                <?php
            require("faili/connect_db.php");
                $atlasit_spec_SQL = "SELECT * FROM vakances";

                $atlasaSpec = mysqli_query($savienojums, $atlasit_spec_SQL);

                while($ieraksts = mysqli_fetch_assoc($atlasaSpec)){
                    echo "<div class='box'>
                    <img src='{$ieraksts['Attels']}'>
                    <h3>{$ieraksts['Nosaukums']}</h3>
                    <p>{$ieraksts['Apraksts']}.</p>
                    <form action='pieteikties.php' method='POST'>
                        <button type='submit' name='pieteikties' class='btn' value='{$ieraksts['Nosaukums']}'>Pieteikties</button>
                    </form>
                </div>";
                }
            ?>
        </div>
    </section>
</body>
</html>