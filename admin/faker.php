
<?php
require_once "../connexion.php";
//envoi de la requette
$connexion = new connexion();
$pdo = $connexion->getConnexion();
$pdo->exec("delete from produit");
$sql = "";
for ($i = 0; $i < 100; $i++) {
    $lib = "produit N°" . $i;
    $pu = random_int(2, 5000);
    $qte = random_int(1, 1000);
    $des = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, perferendis?";
    $img = "https://picsum.photos/400/400/?random=$i";
    $pro = random_int(0, 1);
    $sql .= "insert into produit values(NULL,'$lib',$pu,$qte,'$des','$img',$pro );";
}
$res = $pdo->exec($sql);
?>