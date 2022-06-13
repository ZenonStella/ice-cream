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

    <div class="container my-5 py-5 d-flex justify-content-center">
        <?php
        if (isset($_GET['id'])) {
            $glace = $glaces[$_GET['id']];
        ?>
            <div class="choix rounded-4">
                <h3 class="text-center my-5">Vous avez choisi la glace : </h3>
                <div class="px-5 mx-5">
                    <img class="mb-4 rounded-5" src="assets/img/<?= $glace['img'] ?>.webp" alt="">
                    <p>Goût : <?= $glace['choises'] ?></p>
                    <p><?= $glace['description'] ?></p>
                    <p>Prix : <?= $glace['prices'] ?> €</p>
                    <a href="index.php" class="btn btn-secondary  my-3">Bon Appetit</a>
                </div>
            </div>
        <?php } else {
            echo 'error 404';
        }
        ?>

    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
    </ul>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>