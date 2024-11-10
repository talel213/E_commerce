<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <?php
    include "nav.php";
    ?>

    <div class="container mt-3">
        <h1>Liste des produits</h1>


        <div class="row">
            <?php
            for ($i = 0; $i < 4; $i++) {
            ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://picsum.photos/200/200" class="img-fluid" alt="">
                        <div class="card-body">
                            <h1 class="card-title">
                                Azus I7 1To
                            </h1>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, consequatur.</p>
                            <a href="" class="btn btn-success btn-sm">Detail</a>
                            <a href="" class="btn btn-primary btn-sm my-2 mx-2"><i class="fas fa-shopping-cart"></i> Ajouter</a>
                        </div>
                    </div>
                </div>
            <?php
            } ?>
        </div>
        <hr>
        <h2>Service irreprochable</h2>
        <?php
        include "footer.php";
        ?>
    </div>
</body>

</html>