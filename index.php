<?php
require('assets/data/glaces.php');

include('inc/header.php');
?>

<h2 class="text-center">Choisisez votre parfum de glace</h2>
<div class="mt-5 d-flex flex-wrap justify-content-evenly">
    <?php
    foreach ($glaces as $key => $glace) { ?>
        <div class="card mt-3 cards" style="width: 18rem;">
            <img src="assets/img/<?= $glace['img'] ?>.webp" class="card-img-top" alt="glace <?= $glace['choises'] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $glace['choises'] ?></h5>
                <p class="card-text"><?= $glace['description'] ?></p>
                <p class="card-text">Prix : <?= $glace['prices'] ?> €</p>
                <a href="choix.php?id=<?= $key ?>" class="btn btn-primary">Acheter</a>
            </div>
        </div>
    <?php }
    ?>
</div>

<?php
include('inc/footer.php');
