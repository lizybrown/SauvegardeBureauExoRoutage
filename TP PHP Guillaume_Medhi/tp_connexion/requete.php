

<?php
function requete_connexion() {
    $db = connexion_BD();
    $sql = "SELECT * FROM user";
    $req = $db->prepare($sql);
    $result = $req->execute([
    ]);
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}
?>

<?php

function recupdata($donnee){
    $db = connexion_BD();
    $sql = "SELECT * FROM user WHERE pseudo = :pseudo";
    $req = $db->prepare($sql);
    $req->execute([
        ":pseudo"=> $donnee
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}
?>


