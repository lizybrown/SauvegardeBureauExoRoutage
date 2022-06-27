<!-- creation nouvel utilisateur : -->
<?php
function requete_displayUsers(){
    $db = connexion_BD();
    $sql = "SELECT * FROM users";
    $req = $db->prepare($sql);
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}

function requete_findUser($nom) {
    $db = connexion_BD();
    $sql = "SELECT * FROM users WHERE nom = :nom";
    $req = $db->prepare($sql);
    $req->execute([
        ":nom"=>$nom
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}

function requete_inscription($nom,$mail,$image) {
    $db = connexion_BD();
    $sql = "INSERT INTO users (nom, mail ,images) VALUES (:nom, :mail, :images)";
    $req = $db->prepare($sql);
    $result = $req->execute([
        ":nom" => $nom,
        ":mail" => $mail,
        ":images" =>$image
    ]);
}
function suppression($valeurID){
    $db = connexion_BD();
    $sql = "DELETE FROM users WHERE id_users = :valeurID ";
    $req = $db->prepare($sql);
    $req->execute([
        ":valeurID" =>$valeurID
    ]);
}
function requete_findID($id) {
    $db = connexion_BD();
    $sql = "SELECT images FROM users WHERE id_users = :id";
    $req = $db->prepare($sql);
    $req->execute([
        ":id"=>$id
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}
?>