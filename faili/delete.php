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

?>