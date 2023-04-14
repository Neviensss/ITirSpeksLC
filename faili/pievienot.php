<section class="admin">
        <div class="info">
                <?php
                    #if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    require "faili/connect_db.php";
                    require "header.php";
                    echo "
                        <form method='POST'>
                            <label>Virsraksts:</label><br>
                            <input type='text' placeholder='Ievadiet aktualitates virsrakstu'' name='Virsraksts' class='box2' title='virsraksts'>
                            <label>Apraksts:</label><br>
                            <input type='text' placeholder='Ievadiet aktualitates aprakstu' name='Apraksts' class='box2' title='apraksts'>
                            <label>Attels URL:</label><br>
                            <input type='text' placeholder='Ievadiet attēla URL' name='Attels' class='box2' title='attels'>
                            <button type='submit'  name='addAkt' class='btn'>Pievienot!</button>
                        </form>
                                    ";

                                if(isset($_POST['addAkt'])){
                                    $attels = $_POST['Attels'];
                                    $virsraksts = $_POST['Virsraksts'];
                                    $apraksts = $_POST['Apraksts'];
                                    
                                    if(!empty($attels) && !empty($virsraksts) && !empty($apraksts)){
                                        $ievietotSQL = "INSERT INTO aktualitates(Virsraksts, Apraksts, Attels) VALUE ('$virsraksts', '$apraksts', '$attels')";
                                        if(mysqli_query($savienojums, $ievietotSQL)){
                                            echo "Ieraksts pievienots veiksmīgi!";
                                            header("Refresh:2; url=aktualPar.php");
                                        }else{
                                            echo "Radās kļūda pievienojot ierakstu!";
                                            header("Refresh:2; url=aktualPar.php");
                                        }
                                    }else{
                                        echo "Nav aizpildīti visi ievades lauki!";
                                    }
                                }
                                #}else{
                                    #echo "<div class='pieteiksanaskluda sarkans'>Kaut kas nogāja greizi! Atgriezies iepriekšējā lapā un mēģini vēlreiz!</div>";
                                    #header("Refresh:2; url=index.php");
                                #}
                ?>
        </div>
</section>