<?php 
ob_start();
$titre = "Page de connexion";
if (!empty($_SESSION['alert'])) :
  ?>
      <div id="notif" class="mt-5 notification is-<?= $_SESSION['alert']['type']?>">
      <button id="deleteButton"class="delete"></button>
          <?php echo $_SESSION['alert']["msg"] ?>
      </div>
  <?php
  endif
?>
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">

        <div class="column is-6-tablet is-5-desktop is-4-widescreen">
   
          <form action=<?=URL."connexion_valid"?> class="box" method="POST">
            <div class="field">
              <label for="" class="label">Pseudo</label>
              <div class="control has-icons-left">
                <input type="text" placeholder="Votre pseudonyme" class="input" required name="pseudo">
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="label">Password</label>
              <div class="control has-icons-left">
                <input type="mdp" placeholder="*******" class="input" name="mdp" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="checkbox">
                <input type="checkbox" name="remember">
               Remember me
              </label>
            </div>
            <div class="field">
                <a href=<?=URL."register"?>>Pas encore inscrit ?</a>
            </div>
            <div class="field">
              <button class="button is-success">
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php

        $content = ob_get_clean();
        require_once "template.php";