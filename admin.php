<?php 
    session_start();
    if(isset($_SESSION['lietotajvards'])){
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vakances</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/167/167515.png" type="image/x-icon">
</head>

<section class="admin">
    <div class="row">
        <div class="info">
            <div class="head-info head-color">Vakanču administrēšana<span><form action='pievienot.php' method='POST'>
                                <button type='submit' name='apskatitSpec' class='btn2 specbtn'>Pievienot vakanci <i class='fas fa-circle-plus'></i></button>
                            </form></span></div>
            <table class="adminTabula">
                <tr>
                    <th>attels</th>
                    <th>Vakance</th>
                    <th>Apraksts</th>
                    <th>edit</th>
                    <th>delete</th>
            </tr>
            <?php
                require("faili/connect_db.php");
                $atlasit_spec_SQL = "SELECT * FROM vakances";

                $atlasaSpec = mysqli_query($savienojums, $atlasit_spec_SQL);

                while($ieraksts = mysqli_fetch_assoc($atlasaSpec)){
                    echo "
                    <tr>
                        <td class='specname'>(te ir attels)</td>
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
    </div>
</section>

<?php
}else{
    header("Refresh:1; url=index.php");
    echo "<div class='pieteiksanaskluda sarkans'>Jums nav pieeja šai lapai!</div>";
}
?>