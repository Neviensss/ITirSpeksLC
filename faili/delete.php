<?php 
    require("connect_db.php");

    if(isset($_POST['dzestVac'])){
        $dzesamaVac = $_POST['dzestVac'];

            $dzestSQL = "DELETE FROM vakances WHERE VakancesID=".$_POST['dzestVac'];
            
            if(mysqli_query($savienojums, $dzestSQL)){
                echo "Ieraksts dzēsts veiksmīgi!</div>";
                header("Refresh:2; url=../vakancPar.php");
            }else{
                echo "Radās kļūda dzēšot ierakstu!</div>";
                header("Refresh:2; url=../vakancPar.php");
            }
    }

    if(isset($_POST['dzestMod'])){
        $dzesamaMod = $_POST['dzestMod'];

            $dzestSQL = "DELETE FROM lietotaji WHERE lietotajsID=".$_POST['dzestMod'];
            
            if(mysqli_query($savienojums, $dzestSQL)){
                echo "Ieraksts dzēsts veiksmīgi!</div>";
                header("Refresh:2; url=../modPar.php");
            }else{
                echo "Radās kļūda dzēšot ierakstu!</div>";
                header("Refresh:2; url=../modPar.php");
            }
    }

<<<<<<< HEAD
    if(isset($_POST['dzestAkt'])){
        $dzesamaAkt = $_POST['dzestAkt'];

            $dzestSQL = "DELETE FROM aktualitates WHERE AktualitatesID=".$_POST['dzestAkt'];
            
            if(mysqli_query($savienojums, $dzestSQL)){
                echo "Ieraksts dzēsts veiksmīgi!</div>";
                header("Refresh:2; url=../aktualPar.php");
            }else{
                echo "Radās kļūda dzēšot ierakstu!</div>";
                header("Refresh:2; url=../aktualPar.php");
            }
    }

=======
>>>>>>> 50d097506f359c159a457a7b3f951d11acad09fb
?>