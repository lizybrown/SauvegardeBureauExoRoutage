<?php
   session_start();  
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
  
   </head>
   <body>
   <?php
    // include "pdo.php";
    // include "requete.php"; 


?>

<section>
<div class="titre">
    
    <h1> formulaire inscription avec icone </h1>
    <h2> whaouuuuuuuuuu!!!!</h2>
</div>
      
<!-- 
      <form name="fo" method="post" action="">
         <input type="text" name="login" placeholder="Login" /><br />
         <input type="password" name="pass" placeholder="Mot de passe" /><br />
         <input type="submit" name="valider" value="S'authentifier" />
      </form> -->

      <form action="checklogin.php" method="post" enctype='multipart/form-data'>
      
<p> Username:</p>
<input type="text" name="username">
<p> Password:</p>
<input type="password" name="password">
<p> Email:</p>
<input type="text" name="email">
<p> image:</p>
<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">
       </br></br>
<input type="submit" name="register" value="register">
</form>

      <?php

// if (isset($_POST['btn_inscription'])) {

//    $users = requete_findUser($_POST['pseudo']);
//    $existe = 0;

//    if ($users){
//        $existe = 1;
//    }

//    if($existe === 1) {
//        header("location: connexion.php?existe=".$existe);
//    }
//    if($existe === 0) {
//        $mdp = password_hash($_POST['password'], PASSWORD_DEFAULT);
//        requete_inscription($_POST['pseudo'],$mdp,1);
//        header("location: connexion.php?existe=".$existe);
//    }
// }    
//   ?>
// <?php
//     if (isset($_POST['btn_connexion'])) {
//         $connexion = requete_findUser($_POST['pseudo']);
//         if (!$connexion) {
//             echo "<p>Pseudo inexistant !</p>";
//         } else if ($_POST['pseudo'] === $connexion[0]->pseudo && password_verify($_POST['password'],$connexion[0]->password)) {
//             $_SESSION['user'] = $_POST['pseudo'];
//             $_SESSION['id_role'] = $connexion[0]->id_role;
//             $_SESSION['id_user'] = $connexion[0]->id_user;
//             header('location: index.php');
//         } else {
//             echo "<p>Mot de passe ou identifiant incorrect !</p>";
//         }
//     }
//     ?>

// <?php
// 	if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['nom'])) {
// 	   $tailleMax = 2097152;
// 	   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
// 	   if($_FILES['avatar']['size'] <= $tailleMax) {
// 	      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['nom'], '.'), 1));
// 	      if(in_array($extensionUpload, $extensionsValides)) {
// 	         $chemin = "user/avatar/".$_SESSION['id'].".".$extensionUpload;
// 	         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
// 	         if($resultat) {
// 	            $updateavatar = $bdd->prepare('UPDATE user SET avatar = :avatar WHERE id = :id');
// 	            $updateavatar->execute(array(
// 	               'avatar' => $_SESSION['id'].".".$extensionUpload,
// 	               'id' => $_SESSION['id']
// 	               ));
// 	            header('Location: profil.php?id='.$_SESSION['id']);
// 	         } else {
// 	            $msg = "Erreur durant l'importation de votre photo de profil";
// 	         }
// 	      } else {
// 	         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
// 	      }
// 	   } else {
// 	      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
// 	   }
// 	}
// 	?>

</section>
<!-- 
// if (isset($_POST['valider'])){
//    $recup_data = recupdata($_POST["login"]);

//    if ($recup_data -> pseudo === $_POST['login'] && $recup_data -> mot_de_passe === $_POST['pass']){  
//    $_SESSION ['log']=true;
//    header("location:session.php");
// } else {
//  echo 'rentres un bon mdp ';
// }
// } -->




<!-- ?> -->

   </body>
</html> 
