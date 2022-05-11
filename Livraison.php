<?php include_once("./include/head.php"); ?>

<?php include_once("./include/aside.php"); ?>
<?php
$stock = new Stock();
$fourniture = new Fourniture();
$commande = new Commande();

?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include_once("./include/nav.php"); ?>

    <div class="container-fluid py-4">
        <!-- Content HERE  -->

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4>Historique des Livraisons</h4>
                        <div>
                            <span>
                                <i class="fa-plus-circle"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>N° Commande</th>
                                        <th>Date</th>
                                        <th>Date Livraison</th>
                                        <th>Details</th>
                                        <th>Modifier</th>
                                        <th>Livraison</th>
                                        <th>Supprimer</th>
                                        <th>Imprimer Facture</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                  $commandes = $commande->getCommandes();
                  if (!empty($commandes)) {
                    foreach ($commandes as $commande) {
                  ?>
                                    <tr>
                                        <td> <?php echo $commande['id']; ?> </td>
                                        <td> <?php echo $commande['date']; ?> </td>
                                        <td> <?php echo $commande['date_livraison']; ?> </td>
                                        <td> <?= '  lettre' ?> </td>
                                        <td> <a href="detailsCommande.php?id=<?php echo $commande['id']; ?>"
                                                class="btn btn-primary">Details</a> </td>
                                        <td> <a href="modifierCommande.php?id=<?php echo $commande['id']; ?>"
                                                class="btn btn-primary">Modifier</a> </td>
                                        <td> <a href="livraison.php?id=<?php echo $commande['id']; ?>"
                                                class="btn btn-primary">Livraison</a> </td>
                                        <td> <a href="supprimerCommande.php?id=<?php echo $commande['id']; ?>"
                                                class="btn btn-primary">Supprimer</a> </td>
                                        <td> <a href="imprimerFacture.php?id=<?php echo $commande['id']; ?>"
                                                class="btn btn-primary">Imprimer</a> </td>

                                    </tr>
                                    <?php
                    }
                  }
                  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4>Historique des Livraisons</h4>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Désignation</th>
                                        <th>P.U</th>
                                        <th>Qté commandée</th>
                                        <th>PTTC(Fcfa)</th>
                                        <th>Qté livrée</th>
                                        <th>Qté livrer</th>
                                        <th>Qté non livrée</th>
                                        <th>Modifier</th>
                                        <th>Modifier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Geraud
                                        </td>
                                        <td>
                                            CEO
                                        </td>
                                        <td>
                                            Retraité
                                        </td>
                                        <td>
                                            01/05/1980
                                        </td>
                                        <td>
                                            <a href="#" class="link link-warning">
                                                Modifier
                                            </a>
                                            <a href="#" class="link link-danger">
                                                Supprimer
                                            </a>

                                        </td>


                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once("./include/footer.php"); ?>