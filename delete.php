<?php 
    require("connect_db.php");

    if(isset($_POST['dzestAkt'])){
        $dzesamaVac = $_POST['dzestAkt'];

            $dzestSQL = "DELETE FROM aktualitates WHERE AktualitatesID=".$_POST['dzestAkt'];
            
            if(mysqli_query($savienojums, $dzestSQL)){
                echo "Ieraksts dzēsts veiksmīgi!</div>";
                header("Refresh:2; url=../vakancPar.php");
            }else{
                echo "Radās kļūda dzēšot ierakstu!</div>";
                header("Refresh:2; url=../vakancPar.php");
            }
    }

?>