<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<pre>
<?php




$Marie = [ 'prenom'=> 'Marie', 'age'=> 27, 'genre'=>1];
$Paul=['prenom'=> 'Paul', 'age'=> 32, 'genre'=> 0];
$Mathieu=['prenom'=> 'Mathieu', 'age'=> 30, 'genre'=>0, 'note1'=>2, 'note2'=>2, 'note3'=>2];

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
