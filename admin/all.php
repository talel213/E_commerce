

    <?php
    ob_start();
    require_once "../classes/crud_produit.php";
    $crud = new crud_produit();
    $produits=$crud->findAll()
    ?>
    <table class="table">
        <tr>
            <th>Identifiant</th>
            <th>Libelle</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th colspan=3 class="text-center">Action</th>
        </tr>
        <?php
        foreach($produits as $produit){
        ?>
        <tr>
            <td><?=$produit[0]?></td>
            <td><?=$produit[1]?></td>
            <td><?=$produit[2]?></td>
            <td><?=$produit[3]?></td>
            <td><a href="detail.php?id=<?=$produit[0]?>"><button class="btn btn-info btn-sm">Voir detail</button></a></td>
            <td><a href="delete.php?id=<?=$produit[0]?>"><button class="btn btn-danger btn-sm">Supprimer</button></a></td>
            <td><a href="update.php?id<?=$produit[0]?>"><button class="btn btn-dark btn-sm">Update</button></a></td>
            
        </tr>
        <?php
        }
        $contenu=ob_get_clean();
        $titre="Liste des produits";
        include "../admin/layout.php"
        ?>
    </table>
