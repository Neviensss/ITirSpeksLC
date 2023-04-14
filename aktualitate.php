<?php
include "header.php";
?>

<section class="admin">
        <div class="info">
            <div class="head-info head-color">Aktualitates rediģēšana</div>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        require "faili/connect_db.php";

                        if(isset($_POST['editAkt'])){
                            $MainamaisAttels = $_POST['Attels'];
                            $MainamaisVirsraksts = $_POST['Virsraksts'];
                            $MainamaisApraksts = $_POST['Apraksts'];
                    
                                $atjaunotSQL = "UPDATE aktualitates SET Attels='$MainamaisAttels', Virsraksts='$MainamaisVirsraksts', Apraksts='$MainamaisApraksts' WHERE AktualitatesID = ".$_POST['editAkt'];
                            if(mysqli_query($savienojums, $atjaunotSQL)){
                                echo "Izmaiņas veiktas veiksmīgi!";
                                header("Refresh:2; url=aktualPar.php");
                            }else{
                                echo "Radās kļūda veicot izmaiņas!";
                                header("Refresh:2; url=aktualPar.php");
                            }
                        }else{

                        $AktID = $_POST['redigAkt'];
                        $atlasit_akt_SQL = "SELECT * FROM aktualitates WHERE AktualitatesID = $AktID";

                        $atlasaAkt = mysqli_query($savienojums, $atlasit_akt_SQL);

                        while($ieraksts = mysqli_fetch_assoc($atlasaAkt)){
                            echo "
                                <form method='POST'>
                                <label>Attela URL:</label><br>
                                    <input type='text' value='{$ieraksts['Attels']}' name='Attels' class='box2' title='Attels'>
                                    <label>Vakances nosaukums:</label><br>
                                    <input type='text' value='{$ieraksts['Virsraksts']}' name='Virsraksts' class='box2' title='Virsraksts'>
                                    <label>Apraksts:</label><br>
                                    <input type='text' value='{$ieraksts['Apraksts']}' name='Apraksts' class='box2' title='Apraksts'>
                                    <button type='submit' value='{$ieraksts['AktualitatesID']}' name='editAkt' class='btn'>Saglabāt!</button>
                                </form>
                            ";
                        }
                    }
                    }else{
                        echo "Kaut kas nogāja greizi! Atgriezies iepriekšējā lapā un mēģini vēlreiz!";
                        header("Refresh:2; url=aktualPar.php");
                    }
                ?>
    </div>
</section>