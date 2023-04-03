<?php 
    session_start();
    if(isset($_SESSION['lietotajvards'])){
?>



<?php
}else{
    header("Refresh:1; url=index.php");
    echo "<div class='pieteiksanaskluda sarkans'>Jums nav pieeja šai lapai!</div>";
}
?>