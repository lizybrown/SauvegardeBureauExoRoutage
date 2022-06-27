<?php

use LDAP\Result;

 ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$Marc=[12,15,13,7,18];
$Mathieu=[11,14,10,4,20,8,2];
$nom_eleves=['Marc'=> $Marc,'Mathieu'=> $Mathieu];


function Moyenne ($a){
    return array_sum($a)/count($a); 
 }

foreach($nom_eleves as $key => $value){
echo "<p> La moyenne de " .$key. " est de " .Moyenne($value). ".<p/>"; 

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
