<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<pre>
<?php


$homme=["Mario","Gérard", "Link", "Shepard"];
$femme=["Zelda", "Triss","Peach"];

print_r($homme);

echo"<p> ********************************** <p/>";

print_r($femme);


?>
<pre>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
