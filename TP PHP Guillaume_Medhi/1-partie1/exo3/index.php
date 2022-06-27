<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$num=rand(1,20);

if ($num <=5){
    echo "<p> Il est compris entre 1 et 5 <p/>";
} else if ($num >5 && $num<=10){
    echo "<p> Il est compris entre 6 et 10 <p/>";
} else if ($num >10 && $num<=15){
    echo "<p> Il est compris entre 11 et 15 <p/>";
} else { echo "<p> Il est compris entre 16 et 20 <p/>";}


?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
