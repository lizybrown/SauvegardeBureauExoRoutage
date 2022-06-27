<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    $monMot = "Bonjour";
    $monMotSansVoyelle = supprVoyelle($monMot);

    echo "$monMot sans voyelle est $monMotSansVoyelle";

    function supprVoyelle($a) {
        $voyelle = ["a","e","i","o","u","y"];
        $resultat = str_replace($voyelle,"",$a);
        return $resultat;
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
