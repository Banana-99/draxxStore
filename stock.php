<?php include_once("./include/head.php"); ?>

<?php include_once("./include/aside.php"); ?>

<?php

$stock = new Stock();
$fournisseurs = new Fournisseur();

?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include_once("./include/nav.php"); ?>

    <div class="container-fluid py-4">
        <!-- Content HERE  -->

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4> Liste des Produits </h4>
                        <div>
                            <a href="newStock.php" class="btn btn-primary">
                                Ajouter Produit
                                <span>
                                    <i class="fa-plus-circle"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Designation</th>
                                        <th>Qté actuel en stock</th>
                                        <th>Prix Unitaire</th>
                                        <th>Type</th>
                                        <th>Categorie</th>
                                        <th>Fournisseur</th>
                                        <th>Modifier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                  $produits = $stock->getStock();
                  if (!empty($produits)) {
                    foreach ($produits as $produit) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $produit['designation']; ?>
                                        </td>
                                        <td>
                                            <?php echo $produit['quantite']; ?>
                                        </td>
                                        <td>
                                            <?php echo $produit['prix']; ?>
                                        </td>
                                        <td>
                                            <?php echo $produit['type']; ?>
                                        </td>
                                        <td>
                                            <?php echo $produit['categorie']; ?>
                                        </td>
                                        <td>
                                            <?php $fournisseur = $fournisseurs->getFournisseurByID($produit['fournisseurs_id']);
                          echo $fournisseur['nom'];
                          ?>
                                        </td>
                                        <td>
                                            <a href="?id=<?php echo $produit['id']; ?>">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }
                  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once("./include/footer.php"); ?>