<?php
    $page = "akt";
    require "header.php";
?>

<section class="admin">
    <div class="row">
        <div class="info">
            <div class="head-info head-color" >Pievienot aktualitāti: 
                                    </div>
            <table class="adminTabula">
                <tr>
                    <th>Tēma</th>
                    <th>Teksts</th>
                    <th>Attēls</th>
                   
                </tr>

                <?php
                        echo "
                         
                            <tr>
                                <td class='malas'></td>
                                <td class='malas'></td>
                                <td class='malas'></td>
                                
                            </tr>
                           
                        ";
                    
                ?>
            </table>
        </div>
    </div>
</section>

<?php
    include "footer.php";
?>