<?php ob_start(); //NE PAS MODIFIER 
$titre = "exo 6"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$mois=rand(1,12);

switch($mois){
    case 1:
        echo"<p> Le mois " .$mois. " correspond à janvier <p/>";
        break;
    case 2:
        echo"<p> Le mois " .$mois. " correspond à février <p/>";
        break;
    case 3:
        echo"<p> Le mois " .$mois. " correspond à mars <p/>";
        break;
    case 4:
        echo"<p> Le mois " .$mois. " correspond à avril <p/>";
        break;
    case 5:
        echo"<p> Le mois " .$mois. " correspond à mai <p/>";
        break;
    case 6:
        echo"<p> Le mois " .$mois. " correspond à juin <p/>";
        break;
    case 7:
        echo"<p> Le mois " .$mois. " correspond à juillet <p/>";
        break;
    case 8:
        echo"<p> Le mois " .$mois. " correspond à août <p/>";
        break;
    case 9:
        echo"<p> Le mois " .$mois. " correspond à septembre <p/>";
        break;
    case 10:
        echo"<p> Le mois " .$mois. " correspond à octobre <p/>";
        break;
    case 11:
        echo"<p> Le mois " .$mois. " correspond à novembre <p/>";
        break;
    case 12:
        echo"<p> Le mois " .$mois. " correspond à décembre <p/>";
        break;
                            

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