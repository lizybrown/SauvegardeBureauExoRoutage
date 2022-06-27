<?php
    include "pdo.php";
    include "requetes.php"; 
    ?>

<?php
    var_dump($_FILES);
?>
<?php
if($_FILES['dossier']['size'] > 0) {

    $info = pathinfo($_FILES['dossier']['name']);

    $errors = null;

    $users = requete_displayUsers();
    foreach($users as $value) {
        if (ucfirst(strtolower($_POST['nom'])) === $value->nom) {
            $errors = "existe";
        }
    }

    if ($_FILES['dossier']['size'] > 100000000) {
        $errors .= "-taille";
    }

    if ($info['extension'] != "jpg" && $info['extension'] != "jpeg" && $info['extension'] != "png") {
        $errors .= "-format";
    }

    if ($errors === null) {
            // Si on est bon, c'est ici que ça se passe !
        $chemin_destination = 'img/';
        $nomimage = $_POST["nom"].".".$info['extension'];
        move_uploaded_file($_FILES['dossier']['tmp_name'], 
            $chemin_destination.$_POST["nom"].".".$info['extension']);
        requete_inscription($_POST['nom'],$_POST["mail"],$nomimage);
    }
} else {
    $errors = "erreur";
}

header("location: index.php?errors=".$errors);

?>