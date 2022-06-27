<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Tableaux et fonctions - 2 "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
        $notesMarc = [12,15,13,7,18];
        $notesMathieu = [11,14,10,4,20,8,2];
        $notesEleves = [$notesMarc, $notesMathieu];

        function moyenne($notes) {
            $resultat = 0;
            foreach($notes as $value) {
                $resultat += $value;
            }
            return $resultat / count($notes);
        }

        foreach($notesEleves as $key => $value) {
            echo "La moyenne des notes du <b>" . ($key + 1) . "</b> ème élément est de <b>" . moyenne($value) . "</b></br>";
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