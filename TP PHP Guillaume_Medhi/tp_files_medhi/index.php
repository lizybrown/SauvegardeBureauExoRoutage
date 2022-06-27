


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
    // include "traitement_img.php";
    include "resultat.php"; 
    ?>
    <div class="container w-50 m-a text-center p-5">
        <h1>FORMULAIRE DE CONNEXION</h1>
        <div class="container w-50 m-a text-center p-5">
            <form action="resultat.php" method="post" class ="d-flex flex-column" enctype="multipart/form-data" >
                <input type="text" name="nom" id="nom" placeholder="votre nom " class="m-2">
                <input type="text" name="mail" id="mail" placeholder="votre mail" class="m-2">
                <!-- <input type="text" name="image" id="image" placeholder=" nom de l'image" class="m-2"> -->
                <label for="img">uploader votre image</label>
                <input type="file" name='img' id='img'class="m-2">
                <input type="submit" name ="btn_inscription" value="Creer votre compte" class="m-2">
            </form>
        </div>
    </div>



</body>
</html>