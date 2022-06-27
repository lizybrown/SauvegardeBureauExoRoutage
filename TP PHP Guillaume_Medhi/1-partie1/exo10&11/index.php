<?php

use LDAP\Result;

 ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 & 11: Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$Marc=[12,15,13,7,18];
$Mathieu=[11,14,10,4,20,8,2];

echo "<p> La moyenne des notes de Marc est de " .array_sum($Marc)/count($Marc). ".<p/>";

echo "<p> La moyenne des notes de Mathieu est de " .array_sum($Mathieu)/count($Mathieu). ".<p/>";


function Moyenne ($a){
   return array_sum($a)/count($a); 

}


echo "<p> La moyenne des note de Marc est de " .Moyenne($Marc). ".<p/>"; 

echo "<p> La moyenne des note de Mathieu est de " .Moyenne($Mathieu). ".<p/>"; 


?>



 




<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>