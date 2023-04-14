<?php
require "header.php";
?>
<section class="admin">
        <div class="info">
            <div class="head-info head-color">Vakanču administrēšana<span><form action='pievienot.php' method='POST'>
            <a href="pievienot.php" class='btn2'>Pievienot vakanci!</a>
                            </form></span></div>
            <table class="adminTabula">
                <tr>
                    <th>Attēls</th>
                    <th>Vakance</th>
                    <th>Apraksts</th>
                    <th>Rediģēt</th>
                    <th>Dzēst</th>
            </tr>
            <?php
                require("faili/connect_db.php");
                $atlasit_spec_SQL = "SELECT * FROM vakances";

                $atlasaSpec = mysqli_query($savienojums, $atlasit_spec_SQL);

                while($ieraksts = mysqli_fetch_assoc($atlasaSpec)){
                    echo "
                    <tr>
                        <td class='box'><img src='{$ieraksts['Attels']}' class='specimg'></td>
                        <td class='specname'>{$ieraksts['Nosaukums']}</td>
                        <td class='specdesc'>{$ieraksts['Apraksts']}</td>
                        <td class='specdesc'><form action='vakance.php' method='POST'>
                        <button type='submit' name='redigVac' value='{$ieraksts['VakancesID']}' class='btn'><i class='fas fa-edit'></i></button>
                    </form></td>
                        <td class='specdesc'><form action='faili/delete.php' method='POST'>
                        <button type='submit' name='dzestVac' value='{$ieraksts['VakancesID']}' class='btn'><i class='fas fa-trash-can'></i></button>
                    </form></td>
                    </tr>
                    ";
                }
            ?>
            </table>
    </div>
</section>