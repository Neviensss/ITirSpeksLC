<?php
require "header.php";
?>
<section class="admin">
        <div class="info">
            <div class="head-info head-color">Pieteikumu pārvaldība<span><form action='pieteikumi.php' method='POST'>
                            </form></span></div>
            <table class="adminTabula">
                <tr>
                    <th>Pieteikuma ID</th>
                    <th>Vards</th>
                    <th>Uzvards</th>
                    <th>Epasts</th>
                    <th>Talrunis</th>
                    <th>Izglitiba</th>
                    <th>Pieredze</th>
                    <th>Pielikums</th>
                    <th>IesnLaiks</th>
                    <th>Dzēst</th>
            </tr>
            <?php
                require("faili/connect_db.php");
                $atlasit_piet_SQL = "SELECT * FROM pieteikumi";

                $atlasit_pieteikumus_SQL = "SELECT * FROM pieteikumi as a JOIN statuss as st
                ON a.Statuss = st.StatussID";

                $atlasaPiet = mysqli_query($savienojums, $atlasit_piet_SQL);

                while($ieraksts = mysqli_fetch_assoc($atlasaPiet)){
                    echo "
                    <tr>
                        <td>{$ieraksts['PieteikumsID']}</td>
                        <td>{$ieraksts['Vards']}</td>
                        <td>{$ieraksts['Uzvards']}</td>
                        <td>{$ieraksts['Epasts']}</td>
                        <td>{$ieraksts['Talrunis']}</td>
                        <td>{$ieraksts['Izglitiba']}</td>
                        <td>{$ieraksts['Pieredze']}</td>
                        <td>{$ieraksts['Pielikums']}</td>
                        <td>{$ieraksts['IesnLaiks']}</td>
                        <td><form action='faili/delete.php' method='POST'>
                        <button type='submit' name='dzestVac' value='{$ieraksts['PieteikumsID']}' class='btn'><i class='fas fa-trash-can'></i></button>
                    </form></td>
                    </tr>
                    ";
                }
            ?>
            </table>
    </div>
</section>