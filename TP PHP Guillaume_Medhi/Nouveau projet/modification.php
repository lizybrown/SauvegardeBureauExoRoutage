<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "pdo.php";
        include "requetes.php";
    ?>
<h1>FORMULAIRE DE MODIF</h1>
        <div class="container w-50 m-a text-center p-5">
            <form action="resultat.php" method="post" class ="d-flex flex-column" enctype="multipart/form-data" >
                <input type="text" name="nom" id="nom" placeholder="votre nom " class="m-2">
                <input type="text" name="mail" id="mail" placeholder="votre mail" class="m-2">
                <label for="dossier">uploader votre image</label>
                <input type="file" name="dossier" id="dossier"class="m-2">
                <input type="submit" name ="btn_inscription" value="Creer votre compte" class="m-2">
            </form>
        </div>
</body>
</html>