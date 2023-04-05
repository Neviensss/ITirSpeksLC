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
                 
                ?>
            </table>
        </div>
    </div>
</section>

<?php
    include "footer.php";
?>