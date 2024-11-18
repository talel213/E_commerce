<?php
ob_start();

?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post" class="form-control">
    <label for="">Libelle</label><input type="text" name="lin" id="" class="form-control"><br>
    <label for="">Prix</label><input type="text" name="pu" id="" class="form-control"><br>
    <label for="">Quantité</label><input type="text" name="qte" id="" class="form-control"><br>
    <label for="">Description</label><input type="texterea" name="des" id="" class="form-control"><br>
    <label for="">img</label><input type="text" name="img" id="" class="form-control"><br>
    <label for="">Promo</label><input type="text" name="promo" id="" class="form-control"><br>

    <input type="submit" value="Ajouter" class="btn btn-success btn-xl center">
</form>
<?php
if (isset($_POST["ok"])) {
    require_once "../classes/crud_produit.php";
    $crud = new crud_produit();
    //$produit =new produit();
    $res = $crud->add($produit);

    //envoi de la requette

    if ($res) {
        echo "insertion reussite";
    } else "problem d'insertion";
}
$contenu = ob_get_clean();
$titre = "ajouter un produit";
include "layout.php";
?>