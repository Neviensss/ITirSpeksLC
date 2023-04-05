<?php
    $page = "specialitates";
    require "header.php";
?>

<section class="admin">
    <div class="row">
        <div class="info">
            <div class="head-info head-color" >Aktualitāšu administrēšana:  <form action='pievienot.php' method='post' class='Uzmalu'>
                                        <button type='submit' name='pievienos' class='btn2'>
                                           Pievienot aktualitāti <i class='fas fa-plus'></i>
                                        </button>
                                    </form>
                  
            </div>
            <table class="adminTabula">
                <tr>
                    <th>Attels</th>
                    <th>Tēma</th>
                    <th>Teksts</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php
             
              require("faili/connect_db.php");
              $atlasit_spec_SQL = "SELECT * FROM aktualitates";

              $atlasaSpec = mysqli_query($savienojums, $atlasit_spec_SQL);

              while($ieraksts = mysqli_fetch_assoc($atlasaSpec)){
                  echo "
                  <tr>
                      <td class='specname'>(te ir attels)</td>
                      <td class='specname'>{$ieraksts['Virsraksts']}</td>
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
    include "footer.php";
?>