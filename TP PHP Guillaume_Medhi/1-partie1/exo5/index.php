<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$aleatoire=rand(1,10);

for($i=1;$i<=10;$i++){
    
    echo"<p> " .$i. " fois " .$aleatoire. " qui est égal à  " .($i*$aleatoire). "<p/>";
}


?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>