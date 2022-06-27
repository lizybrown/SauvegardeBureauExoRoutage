<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$a=3;
$b=5;
$c=7;

[$a, $b, $c] = [$b, $c, $a];


echo"[$a, $b, $c] = [$b, $c, $a]";
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
