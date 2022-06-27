<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$Bonjour = "Bonjour"; 

$voyelle = ["a","e", "i","o","u", "y"];


echo "<p> Bonjour sans voyelle est " .str_replace($voyelle, "", $Bonjour). ".<p/>";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
