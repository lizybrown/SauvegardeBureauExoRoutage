<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : La boucle while"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $random = rand(1,20);
    $count = 1;
    while($random <= 15) {
        echo "Essaie $count : $random, c'est inférieur à 15</br>";
        $random = rand(1,20);
        $count++;
    }
    echo "$random est supérieur à 15";
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>