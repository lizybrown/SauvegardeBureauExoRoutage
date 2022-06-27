<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $a = 3;
    $b = 5;
    $c = 7;
?>

<p>****************** Avant Permutaion ****************</p>
<p>A : <?=$a?></p>
<p>B : <?=$b?></p>
<p>C : <?=$c?></p>

<?php 
    $new = $a;
    $a = $b;
    $b = $c;
    $c = $new;
?>

<p>****************** Après Permutaion ****************</p>
<p>A : <?=$a?></p>
<p>B : <?=$b?></p>
<p>C : <?=$c?></p>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
