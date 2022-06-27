<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Les tableaux - 2"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $notesMarc = [12,15,13,7,18];
    $notesMathieu = [11,14,10,4,20,8,2];

    $resultat = 0;
    for($i=0; $i<=count($notesMarc)-1; $i++) {
        $resultat += $notesMarc[$i];
    }

    echo "La moyenne des notes de <b>Marc</b> est de <b>" . ($resultat / count($notesMarc)) . "</b>";
    echo "</br>";

    $resultat = 0;
    foreach($notesMathieu as $value) {
        $resultat += $value;
    }
    echo "La moyenne des notes de <b>Mathieu</b> est de <b>" . ($resultat / count($notesMathieu)) . "</b>";
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>