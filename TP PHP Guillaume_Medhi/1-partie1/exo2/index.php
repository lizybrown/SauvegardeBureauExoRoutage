<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$nom="Julie";
$age="40";
$homme="false";


$nom2="Joe";
$age2="46";
$homme2="true";


echo $homme?"<p> Je suis " .$nom2. " un homme de " .$age2." ans </p>" : "<p> Je suis " .$nom. " une femme de " .$age. " ans </p>";
echo $homme2?"<p> Je suis " .$nom. " une femme de " .$age." ans </p>" : "<p> Je suis " .$nom2. " un homme de " .$age2. " ans </p>";

?>





<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
