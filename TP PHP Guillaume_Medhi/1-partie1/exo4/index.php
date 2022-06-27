<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php


$chiffre1=rand(1,100);
$chiffre2=rand(1,100);


$valeur_abs=$chiffre1-$chiffre2;


switch ($valeur_abs){
    case ($valeur_abs) < 12 :
        echo " <p> la valeur absolue de " .$chiffre1. " et " .$chiffre2. " est plus petite que 12. ";
        break;
    case ($valeur_abs) > 12 :
        echo " <p> la valeur absolue de " .$chiffre1. " et " .$chiffre2. " est plus grande que 12. ";
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
