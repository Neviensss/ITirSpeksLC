<section class="admin">
        <div class="info">
                <?php
                    #if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    require "faili/connect_db.php";
                    require "header.php";
                    echo "
                        <form method='POST'>
                            <label>Vakances nosaukums:</label><br>
                            <input type='text' placeholder='Ievadiet vakances nosaukumu'' name='nosaukums' class='box2' title='Nosaukums'>
                            <label>Attela URL:</label><br>
                            <input type='text' placeholder='Ievadiet attēla URL' name='attels' class='box2' title='Attels'>
                            <label>Apraksts:</label><br>
                            <input type='text' placeholder='Ievadiet vakances aprakstu' name='apraksts' class='box2' title='Apraksts'>
                            <button type='submit'  name='addVac' class='btn'>Pievienot!</button>
                        </form>
                                    ";

                                if(isset($_POST['addVac'])){
                                    $attels = $_POST['attels'];
                                    $nosaukums = $_POST['nosaukums'];
                                    $apraksts = $_POST['apraksts'];
                                    
                                    if(!empty($attels) && !empty($nosaukums) && !empty($apraksts)){
                                        $ievietotSQL = "INSERT INTO vakances(Nosaukums, Apraksts, Attels) VALUE ('$nosaukums', '$apraksts', '$attels')";
                                        if(mysqli_query($savienojums, $ievietotSQL)){
                                            echo "<div class='pieteiksanaskluda zals'>Ieraksts pievienots veiksmīgi!</div>";
                                        }else{
                                            echo "<div class='pieteiksanaskluda sarkans'>Radās kļūda pievienojot ierakstu!</div>";
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