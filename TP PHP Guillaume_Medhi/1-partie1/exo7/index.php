<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php


$aleatoire=rand(1,20);
$essaie=0;

while ($aleatoire<15){
    $essaie++;
    echo "<p> essaie: ".$essaie. " : " .$aleatoire. " est inférieur à 15 <p/>";      
    $aleatoire=rand(1,20);
}
echo "<p>" .$aleatoire. " est supérieur à 15 <p/>";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
