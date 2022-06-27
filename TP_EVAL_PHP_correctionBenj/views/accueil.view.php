<?php
ob_start();
$title = "Le blog de Benjamin";
if (!empty($_SESSION['alert'])) :
  ?>
      <div id="notif"class="mt-5 notification is-<?= $_SESSION['alert']['type']?>">
      <button id="deleteButton" class="delete"></button>
          <?php echo $_SESSION['alert']["msg"] ?>
      </div>
  <?php
  endif
?>
<!-- Image -->
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column is-8 is-offset-2">
          <figure class="image is-16by9">
            <h1><img src="<?= URL ?>public/images/accueil.png" alt=<?= $title ?> style="object-fit: contain;"></h1>
          </figure>
        </div>
      </div>

      <?php
      foreach ($articles as $article) :
      ?>
        <a class="linkAccueil" href=article/lire/<?= $article->getId_article() ?>>
          <section class="card cardAccueil mt-6">
            <div class="card-content">
              <h2 class="title">
                <?= $article->getTitle() ?>
              </h2>
              <p class="subtitle">
                <?= $article->getResume() ?>
              </p>
            </div>
            <footer class="card-footer">
              <p class="card-footer-item">
                <span>
                  <?= date('d-m-Y H:i:s', strtotime($article->getTime())) ?>
                </span>
              </p>
            </footer>
          </section>
        </a>

      <?php
      endforeach;
      ?>
    </div>
  </div>
</section>


<?php

$content = ob_get_clean();
require_once "template.view.php";
