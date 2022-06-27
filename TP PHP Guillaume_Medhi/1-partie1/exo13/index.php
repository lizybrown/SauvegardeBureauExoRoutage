

<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : Les Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<pre>
<?php


// $personnes = ['Marie'=>27, 'Paul'=>32, 'Mathieu'=>26];

// $age = ['Marie'=>27, 'Paul'=>32, 'Mathieu'=>26];





$Marie = [ 'prenom'=> 'Marie', 'age'=> 27, 'genre'=>1];
$Paul=['prenom'=> 'Paul', 'age'=> 32, 'genre'=> 0];
$Mathieu=['prenom'=> 'Mathieu', 'age'=> 26, 'genre'=>0];
$genre = [1=>'feminin', 0=>'masculin'];


function affichage($a){

echo $a['prenom'];

echo $a['age'];

if ($a ['genre']===0) {
    echo "<p> masculin";
} else echo "<p> feminin";
    
}

affichage($Paul);



// function Personnes ($a){
//     echo array_keys($a); 
//  }

//  print_r(array_keys($personnes));
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
