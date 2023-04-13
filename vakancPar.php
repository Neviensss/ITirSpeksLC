<?php
require "header.php";
?>
<section class="admin">
        <div class="info">
            <div class="head-info head-color">Vakanču administrēšana<span><form action='pievienot.php' method='POST'>
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
                        <td class='specdesc'>(bus edit poga)</td>
                        <td class='specdesc'>(bus dzesanas poga)</td>
                    </tr>
                    ";
                }
            ?>
            </table>
    </div>
</section>