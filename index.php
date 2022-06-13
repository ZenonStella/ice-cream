<?php
require('assets/data/glaces.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Glaces du paradi
            </a>
        </div>
    </nav>

    <div class="container py-5 my-5">
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
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook" />
                    </svg></a></li>
        </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>