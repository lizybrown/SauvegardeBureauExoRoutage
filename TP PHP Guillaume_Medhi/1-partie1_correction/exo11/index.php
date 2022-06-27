<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Tableaux et fonctions "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
        $notesMarc = [12,15,13,7,18];
        $notesMathieu = [11,14,10,4,20,8,2];

        function moyenne($notes) {
            $resultat = 0;
            foreach($notes as $value) {
                $resultat += $value;
            }
            return $resultat / count($notes);
        }

        echo "La moyenne des notes de <b>Marc</b> est de <b>" . moyenne($notesMarc) . "</b></br>";
        echo "La moyenne des notes de <b>Mathieu</b> est de <b>" . moyenne($notesMathieu) . "</b>";
?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>