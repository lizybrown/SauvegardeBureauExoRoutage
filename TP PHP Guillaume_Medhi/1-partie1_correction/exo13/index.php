<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : Tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    $j1 = [
        "nom" => "Chris",
        "age" => 35,
        "homme" => true
    ];

    $j2 = [
        "nom" => "Claire",
        "age" => 32,
        "homme" => false
    ];

    function afficherJoueur($joueur) {
        echo "Nom : " . $joueur['nom'] . "</br>";
        echo "Age : " . $joueur['age'] . "</br>";
        if($joueur['homme']) {
            echo "Sexe : Homme </br>";
        } else {
            echo "Sexe : Femme </br>";
        }
    }

    afficherJoueur($j1);
    echo "-------------------</br>";
    afficherJoueur($j2);
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
