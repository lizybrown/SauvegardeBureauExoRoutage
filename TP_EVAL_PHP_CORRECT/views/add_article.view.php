<?php
ob_start();
$title = "Ajouter un article";
if (!empty($_SESSION['alert'])) :
  ?>
      <div id="notif"class=" mt-5 notification is-<?= $_SESSION['alert']['type']?>">
      <button id="deleteButton"class="delete"></button>
          <?php echo $_SESSION['alert']["msg"] ?>
      </div>
  <?php
  endif
?>
<section class="hero is-fullheight mt-5 mb-5">
  <div class="hero-body">
    <div class="container">
      <form action=<?= URL."article/ajouter_valid"?> method="POST" enctype="multipart/form-data">
        <div class="field">
          <label for="title" class="label">Titre principal de l'article</label>
          <div class="control has-icons-left">
            <input id="title" type="text" placeholder="Votre titre" class="input" required name="title">
            <span class="icon is-small is-left">
              <i class="fas fa-heading"></i>
            </span>
          </div>
        </div>
        <div class="field">
          <label for="resume" class="label">Résumé de l'article</label>
          <div class="control has-icons-left">
            <input id="resume" type="text" placeholder="Votre résumé de l'article" class="input" required name="resume">
            <span class="icon is-small is-left">
              <i class="fas fa-ellipsis-h"></i>
            </span>
          </div>
        </div>
        <div class="field">
          <label for="pic" class="label">Photo de l'article</label>
          <div class="control has-icons-left">
            <input id="pic" type="file" placeholder="photo de l'article" class="input" name="picture">
            <span class="icon is-small is-left">
              <i class="far fa-file-image"></i>
            </span>
          </div>
        </div>
        <label for="content" class="label">Contenu de l'article (plus de 100 caractères)</label>
        <textarea id="content" style="height:650px" id="Article is-fullheight" name="content">
        </textarea>
        <div class="field">
          <button class="button is-medium mt-5 is-success is-light">Publier l'article</button>
        </div>
      </form>
    </div>


  </div>
</section>

<script src="https://cdn.tiny.cloud/1/eg8e38t0i182zmq4iofm9cfzao2xy3iotdwqg4319b1m2tl9/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src=<?=URL."public/js/form.js"?>></script>
<?php
$content = ob_get_clean();
require_once "template.view.php";
?>