<section class="admin">
        <div class="info">
                <?php
                    #if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    require "faili/connect_db.php";
                    require "header.php";
                    echo "
                        <form method='POST'>
                            <label>Moderatora lietotājvārds:</label><br>
                            <input type='text' placeholder='Ievadiet moderatora lietotājvārdu'' name='lietotajvards' class='box2' title='Lietotajvards'>
                            <label>Moderatora Epasts:</label><br>
                            <input type='text' placeholder='Ievadiet moderatora Epastu' name='epasts' class='box2' title='Epasts'>
                            <label>Moderatora parole:</label><br>
                            <input type='password' placeholder='Ievadiet moderatora paroli' name='parole' class='box2' title='Parole'>
                            <button type='submit' name='addMod' class='btn'>Pievienot!</button>
                        </form>
                                    ";
                                if(isset($_POST['addMod'])){
                                    $epasts = $_POST['epasts'];
                                    $lietotajvards = $_POST['lietotajvards'];
                                    $paroleUR = $_POST['parole'];
                                    $parole = password_hash($paroleUR, PASSWORD_DEFAULT);
                                    
                                    if(!empty($epasts) && !empty($lietotajvards) && !empty($parole)){
                                        $ievietotSQL = "INSERT INTO lietotaji(Lietotajvards, Epasts, Parole) VALUE ('$lietotajvards', '$epasts', '$parole')";
                                        if(mysqli_query($savienojums, $ievietotSQL)){
                                            echo "Ieraksts pievienots veiksmīgi!";
                                            header("Refresh:2; url=modPar.php");
                                        }else{
                                            echo "Radās kļūda pievienojot ierakstu!";
                                            header("Refresh:2; url=modPar.php");
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