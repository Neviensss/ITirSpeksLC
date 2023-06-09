<?php
require "header.php";
?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorizācija potālā</title>
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/167/167515.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="nosaukums">
                Autorizācija portālā
            </div>
            <div class="info">
                <?php
                    if(isset($_POST["autorizeties"])){
                        require("faili/connect_db.php");

                        session_start();
                        
                        $lietotajvards = mysqli_real_escape_string($savienojums, $_POST["lietotajs"]);

                        $Parole = mysqli_real_escape_string($savienojums, $_POST["parole"]);

                        $sqlVaicajums = "SELECT * FROM lietotaji WHERE Lietotajvards = '$lietotajvards'";

                        $rezultats = mysqli_query($savienojums, $sqlVaicajums);

                        if(mysqli_num_rows($rezultats) == 1){
                            while($row = mysqli_fetch_array($rezultats)){
                                if(password_verify($Parole, $row["Parole"])){
                                    $_SESSION["lietotajvards"] = $lietotajvards;
                                    header("location:index.php");
                                }else{
                                    echo "Nepareizs lietotājvārds vai parole!";
                                }
                            }
                        }else{
                            echo "Nepareizs lietotājvārds vai parole!";
                        }
                    }

                    if(isset($_GET['logout'])){
                        session_destroy();
                    }
                ?>
            </div>
            <form action="" method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lietotajs" placeholder="Lietotājvārds" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="parole" placeholder="Parole" required>
                </div>
                <div class="row poga">
                    <input type="submit" name="autorizeties" value="Ielogoties!">
                </div>
            </form>
    </div>
</body>
</html>