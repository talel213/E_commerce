
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "../connexion.php" ;
    $sql="insert into produit values(NULL,'Cable rj45',1.5,2000,'bbbb bbbbbbbbb bbbbb bbbbbbb bbbb ','https://picsum.photos/400/400',1 )";
    //envoi de la requette
    $connexion= new connexion();
    $pdo=$connexion->getConnexion();
    $res=$pdo->exec($sql);
    if($res)
    {echo "insertion reussite";}
    else "problem d'insertion";
    ?>
</body>
</html>