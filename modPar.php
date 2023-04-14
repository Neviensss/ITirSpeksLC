<?php
require "header.php";
?>
<section class="admin">
        <div class="info">
            <div class="head-info head-color">Moderatoru pārvaldība<span><form action='pievienotMod.php' method='POST'>
            <a href="pievienotMod.php" class='btn2'>Pievienot moderatoru!</a>
                            </form></span></div>
            <table class="adminTabula">
                <tr>
                    <th>Lietotājvārds</th>
                    <th>Epasts</th>
                    <th>Dzēst</th>
            </tr>
            <?php
                require("faili/connect_db.php");
                $atlasit_mod_SQL = "SELECT * FROM lietotaji";

                $atlasaMod = mysqli_query($savienojums, $atlasit_mod_SQL);

                while($ieraksts = mysqli_fetch_assoc($atlasaMod)){
                    echo "
                    <tr>
                        <td>{$ieraksts['Lietotajvards']}</td>
                        <td>{$ieraksts['Epasts']}</td>
                        <td><form action='faili/delete.php' method='POST'>
                        <button type='submit' name='dzestMod' value='{$ieraksts['lietotajsID']}' class='btn'><i class='fas fa-trash-can'></i></button>
                    </form></td>
                    </tr>
                    ";
                }
            ?>
            </table>
    </div>
</section>