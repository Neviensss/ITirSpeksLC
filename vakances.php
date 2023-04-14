<?php
    require "header.php";
?>
    <section id="news">
        <h1>Vakances</h1>
        <div class="box-container">
                <?php
            require("faili/connect_db.php");
                $atlasit_spec_SQL = "SELECT * FROM vakances";

                $atlasaSpec = mysqli_query($savienojums, $atlasit_spec_SQL);

                while($ieraksts = mysqli_fetch_assoc($atlasaSpec)){
                    echo "<div class='box'>
                    <img src='{$ieraksts['Attels']}'>
                    <h3>{$ieraksts['Nosaukums']}</h3>
                    <p>{$ieraksts['Apraksts']}.</p>
                    <form action='pieteikties.php' method='POST'>
                        <button type='submit' name='pieteikties' class='btn' value='{$ieraksts['Nosaukums']}'>Pieteikties</button>
                    </form>
                </div>";
                }
            ?>
        </div>
    </section>
</body>