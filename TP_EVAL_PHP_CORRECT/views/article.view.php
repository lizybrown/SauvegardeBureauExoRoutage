<?php
ob_start();
$title = $article->getTitle();
?>
<section class="hero is-medium is-bold mt-5 mb-5" style="background-image: url(<?= URL . "public/images/uploads/" . $article->getImage() ?>); background-size:cover;">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title article_title"><?= $article->getTitle() ?></h1>
        </div>
    </div>
</section>
<!-- START ARTICLE FEED -->
<?php
if ((isset($_SESSION['user']) && $_SESSION['user']->getId_role() == 1) || (isset($_COOKIE['user']) && unserialize($_COOKIE['user'])->getId_role() == 1)) {
?>
    <section class="articles mb-5 mt-5">
        <form action=<?= URL . "article/delete/" . $article->getId_article() ?> onsubmit="return confirm('Voulez-vous vraiment supprimer le livre ?');">
            <button type="submit" class="button is-danger articleButton ml-5">Supprimer l'article</button>
        </form>
    <?php
}
    ?>

    <div class="column is-8 is-offset-2">
        <!-- START ARTICLE -->
        <div class="card article">
            <div class="card-content">
                <div class="media">
                    <div class="media-content has-text-centered">
                        <p class="title article-title"><?= $article->getResume() ?></p>
                        <div class="tags has-addons level-item">
                            <span class="tag is-rounded is-info"><?= $article->getUser()->getPseudo() ?></span>
                            <span class="tag is-rounded"><?= date('d-m-Y H:i:s', strtotime($article->getTime())) ?></span>
                        </div>
                    </div>
                </div>
                <div class="content article-body">
                    <?= $article->getContent() ?>
                </div>
            </div>
        </div>
    </div>
    </section>
    <?php

    $content = ob_get_clean();
    require_once "template.view.php";
