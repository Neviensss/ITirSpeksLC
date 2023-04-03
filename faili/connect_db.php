<?php 
    $servera_vards = "localhost:3307"; //varbūt localhost:3307
    $lietotajvards = "root";
    $parole = "";
    $db_vards = "itirspeks";

    $savienojums = mysqli_connect($servera_vards, $lietotajvards, $parole, $db_vards);
?>