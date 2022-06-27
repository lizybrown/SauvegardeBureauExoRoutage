<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    $hommes = ['Mario','Geralt','Link','Shepard'];
    for($i=0; $i < count($hommes); $i++) {
        echo $i . " : " . $hommes[$i] . "</br>";
    }

    echo "****************************</br>";

    $femmes = [];
    $femmes[] = "Zelda";
    $femmes[] = "Triss";
    $femmes[] = "Peach";

    foreach($femmes as $key => $value) {
        echo $key . " : " . $value . "</br>";
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