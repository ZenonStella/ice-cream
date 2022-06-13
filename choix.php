<?php
require('assets/data/glaces.php');

include('inc/header.php');
?>

<div class="d-flex justify-content-center">
    <?php
    if (isset($_GET['id']) && array_key_exists($_GET['id'], $glaces)) {
        $glace = $glaces[$_GET['id']];
    ?>
        <div class="choix rounded-4">
            <h3 class="text-center my-5">Vous avez choisi la glace : </h3>
            <div class="px-5 mx-5">
                <img class="mb-4 rounded-5" src="assets/img/<?= $glace['img'] ?>.webp" alt="">
                <p>Goût : <?= $glace['choises'] ?></p>
                <p><?= $glace['description'] ?></p>
                <p>Prix : <?= $glace['prices'] ?> €</p>
                <div class="d-flex justify-content-center mb-3">
                    <a href="index.php" title="Retour a la page d'accueil" class="btn btn-secondary  my-3">Bon Appetit</a>
                </div>
            </div>
        </div>
    <?php } else {
        require('404.php');
    }
    ?>
</div>


<?php
include('inc/footer.php');
