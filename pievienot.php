<section class="admin">
        <div class="info">
                <?php
                    #if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    require "faili/connect_db.php";
                    require "header.php";
                    echo "
                        <form method='POST'>
<<<<<<< HEAD
                            <label>Virsraksts:</label><br>
                            <input type='text' placeholder='Ievadiet aktualitates virsrakstu'' name='Virsraksts' class='box2' title='virsraksts'>
                            <label>Apraksts:</label><br>
                            <input type='text' placeholder='Ievadiet aktualitates aprakstu' name='Apraksts' class='box2' title='apraksts'>
                            <label>Attels URL:</label><br>
                            <input type='text' placeholder='Ievadiet attēla URL' name='Attels' class='box2' title='attels'>
                            <button type='submit'  name='addAkt' class='btn'>Pievienot!</button>
=======
                            <label>Vakances nosaukums:</label><br>
                            <input type='text' placeholder='Ievadiet vakances nosaukumu'' name='nosaukums' class='box2' title='Nosaukums'>
                            <label>Apraksts:</label><br>
                            <input type='text' placeholder='Ievadiet vakances aprakstu' name='apraksts' class='box2' title='Apraksts'>
                            <label>Attela URL:</label><br>
                            <input type='text' placeholder='Ievadiet attēla URL' name='attels' class='box2' title='Attels'>
                            <button type='submit'  name='addVac' class='btn'>Pievienot!</button>
>>>>>>> 50d097506f359c159a457a7b3f951d11acad09fb
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
<<<<<<< HEAD
                                            header("Refresh:2; url=aktualPar.php");
                                        }else{
                                            echo "Radās kļūda pievienojot ierakstu!";
                                            header("Refresh:2; url=aktualPar.php");
=======
                                            header("Refresh:2; url=vakancPar.php");
                                        }else{
                                            echo "Radās kļūda pievienojot ierakstu!";
                                            header("Refresh:2; url=vakancPar.php");
>>>>>>> 50d097506f359c159a457a7b3f951d11acad09fb
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