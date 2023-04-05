<?php
    $page = "specialitates";
    require "header.php";
?>

<section class="admin">
    <div class="row">
        <div class="info">
            <div class="head-info head-color" >Specialitāšu administrēšana:  <form action='pievienot.php' method='post' class='Uzmalu'>
                                        <button type='submit' name='pievienos' class='btn2'>
                                           Pievienot specialitāti <i class='fas fa-plus'></i>
                                        </button>
                                    </form>
                  
            </div>
            <table class="adminTabula">
                <tr>
                    <th>Attels</th>
                    <th>Specialitate</th>
                    <th>Apraksts</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php
                    require "../files/connect_db.php";
                    $atlasit_specialitates_SQL = "SELECT Attels_URL, Nosaukums, Apraksts FROM specialitates";
                    $atlasa_specialitates = mysqli_query($savienojums, $atlasit_specialitates_SQL);

                    while($ieraksts = mysqli_fetch_assoc($atlasa_specialitates)){
                        if(empty($ieraksts['Komentars'])){
                            $Komentars = "<i class='fas fa-times'></i>";
                        }else{
                            $Komentars = "<i class='fas fa-check'></i>";
                        }
                        echo "
                            <tr>
                                <td class='malas'><img src='{$ieraksts['Attels_URL']}' height='150' width='250' ></td>
                                <td class='malas'>{$ieraksts['Nosaukums']}</td>
                                <td class='malas'>{$ieraksts['Apraksts']}</td>
                                <td class='malas2'>  <form method='post' > <button type='submit' class='btn2' > <i class='fas fa-edit'></i> </button> </form></td>
                                <td class='malas2'>  <form method='post' > <button type='submit' class='btn2' > <i class='fas fa-trash-can'></i> </button> </form></td>
                                
                            </tr>
                        ";
                    }
                ?>
            </table>
        </div>
    </div>
</section>

<?php
    include "footer.php";
?>