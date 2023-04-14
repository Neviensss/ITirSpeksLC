<?php
include "header.php";
?>

<section class="admin">
        <div class="info">
            <div class="head-info head-color">Vakances rediģēšana</div>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        require "faili/connect_db.php";

                        if(isset($_POST['editVac'])){
                            $MainamaisAttels = $_POST['attels'];
                            $MainamaisNosaukums = $_POST['nosaukums'];
                            $MainamaisApraksts = $_POST['apraksts'];
                    
                                $atjaunotSQL = "UPDATE vakances SET Attels='$MainamaisAttels', Apraksts='$MainamaisApraksts', Nosaukums='$MainamaisNosaukums' WHERE VakancesID = ".$_POST['editVac'];
                            if(mysqli_query($savienojums, $atjaunotSQL)){
                                echo "Izmaiņas veiktas veiksmīgi!";
                                header("Refresh:2; url=vakancPar.php");
                            }else{
                                echo "Radās kļūda veicot izmaiņas!";
                                header("Refresh:2; url=vakancPar.php");
                            }
                        }else{

                        $VacID = $_POST['redigVac'];
                        $atlasit_vac_SQL = "SELECT * FROM vakances WHERE VakancesID = $VacID";

                        $atlasaVac = mysqli_query($savienojums, $atlasit_vac_SQL);

                        while($ieraksts = mysqli_fetch_assoc($atlasaVac)){
                            echo "
                                <form method='POST'>
                                <label>Attela URL:</label><br>
                                    <input type='text' value='{$ieraksts['Attels']}' name='attels' class='box2' title='Attels'>
                                    <label>Vakances nosaukums:</label><br>
                                    <input type='text' value='{$ieraksts['Nosaukums']}' name='nosaukums' class='box2' title='Nosaukums'>
                                    <label>Apraksts:</label><br>
                                    <input type='text' value='{$ieraksts['Apraksts']}' name='apraksts' class='box2' title='Apraksts'>
                                    <button type='submit' value='{$ieraksts['VakancesID']}' name='editVac' class='btn'>Saglabāt!</button>
                                </form>
                            ";
                        }
                    }
                    }else{
                        echo "Kaut kas nogāja greizi! Atgriezies iepriekšējā lapā un mēģini vēlreiz!";
                        header("Refresh:2; url=vakancPar.php");
                    }
                ?>
    </div>
</section>