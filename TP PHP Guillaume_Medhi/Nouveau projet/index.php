<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    include "pdo.php";
    include "requetes.php";
    if (isset($_GET['supp'])) {
        $deleteImg = requete_findID($_GET['supp']);
        unlink('img/'.$deleteImg->images);
        suppression($_GET['supp']);
    } 
    ?>
    <div class="container w-50 m-a text-center p-5">
        <h1>FORMULAIRE D'INSCRIPTION</h1>
        <div class="container w-50 m-a text-center p-5">
            <form action="resultat.php" method="post" class ="d-flex flex-column" enctype="multipart/form-data" >
                <input type="text" name="nom" id="nom" placeholder="votre nom " class="m-2">
                <input type="text" name="mail" id="mail" placeholder="votre mail" class="m-2">
                <label for="dossier">uploader votre image</label>
                <input type="file" name="dossier" id="dossier"class="m-2">
                <input type="submit" name ="btn_inscription" value="Creer votre compte" class="m-2">
            </form>
        </div>
    </div>
        <?php
            $affichage = requete_displayUsers();
            foreach($affichage as $key =>$value){ ?>
            <div class="card container mt-5 p-3" style="width: 15rem;">
            <img src="img/<?= $value->images ?>" class="card-img-top" alt="<?= $value->images ?>" height="150" style="object-fit : cover">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value->nom ?></h5>
                        <p class="card-text"><?= $value->mail ?></p>
                        <a href="index.php?supp=<?= $value->id_users ?>" class="btn btn-warning stretched-link">supprimer</a>
                        <form action="modification.php" method="post">
                        <input type="submit" name ="btn_modif" value="Modifier votre compte" class="m-2 btn btn-warning">
                        </form>
                    </div>
                </div>
            <?php } 
            ?>
</body>
</html>


    
