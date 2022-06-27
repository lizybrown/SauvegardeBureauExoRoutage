<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
  <!-- <link rel="stylesheet" href="../css/bulma-divider.min.css"> -->
  <link rel="stylesheet" href=<?= URL . "public/css/index.css" ?>>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
  <!-- START NAV -->
  <nav class="navbar">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href=<?= URL ?>>
          <img src=<?= URL . "public/images/logo.png" ?> alt="Logo">
        </a>
        <span class="navbar-burger burger" data-target="navbarMenu">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
      <div id="navbarMenu" class="navbar-menu">
        <div class="navbar-end">
          <div class=" navbar-item">
          </div>
          <a href=<?= URL ?> class="navbar-item is-active is-size-5 has-text-weight-semibold">
            Accueil
          </a>
          <?php if (!isset($_SESSION['user']) && !isset($_COOKIE['user'])) {
          ?>
            <a href=<?= URL . "connexion" ?> class="navbar-item is-size-5 has-text-weight-semibold">
              Inscription | Connexion
            </a>
            <?php

          } else {
            if ((isset($_SESSION['user']) && $_SESSION['user']->getId_role() == 1) || (isset($_COOKIE['user']) && unserialize($_COOKIE['user'])->getId_role() == 1)) {
            ?>
              <a href=<?= URL . "article/ajouter" ?> class="navbar-item is-size-5 has-text-weight-semibold">
                Ajouter un article
              </a>
            <?php
            }
            ?>
            <a href=<?= URL . "deconnexion" ?> class="navbar-item is-size-5 has-text-weight-semibold">
              Deconnexion
            </a>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- END NAV -->
  <!-- CONTENT START -->
  <div class="container">
    <?= $content ?>
  </div>
  <!-- CONTENT END -->
  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Evaluation - PHP by Benjamin</strong>
      </p>
    </div>
  </footer>
  <?php if (isset($_SESSION['alert'])) {
  ?>
    <script src=<?= URL . "public/js/deleteNotif.js" ?>></script>
  <?php
  }
  ?>

  <script>
    document.addEventListener('DOMContentLoaded', () => {

      // Get all "navbar-burger" elements
      const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

      // Check if there are any navbar burgers
      if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
          el.addEventListener('click', () => {

            // Get the target from the "data-target" attribute
            const target = el.dataset.target;
            const $target = document.getElementById(target);

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');

          });
        });
      }

    });
  </script>

</body>

</html>