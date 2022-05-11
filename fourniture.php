<?php include_once("./include/head.php"); ?>

<?php
include_once("./include/aside.php");
?>

<?php
$stock = new Stock();
$fourniture = new Fourniture();

?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include_once("./include/nav.php"); ?>

    <div class="container-fluid py-4">
        <!-- Content HERE  -->
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h4>Liste des commandes</h4>
                    <div class="d-flex">
                        <a href="nouveauFourniture.php" class="btn btn-primary">Nouvelle commande</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td> Date </td>
                                    <td> Produit </td>
                                    <td> Quantite Avant </td>
                                    <td> Quantite Apres </td>
                                    <td> Montant </td>
                                    <td> Actions </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                $fournitures = $fourniture->getFournitures();
                if (!empty($fournitures)) {
                  foreach ($fournitures as $fourniture) {
                ?>
                                <tr>
                                    <td> <?php echo $fourniture['date']; ?> </td>
                                    <td> <?php
                            // get the product info
                            $product_info = $stock->getStockByID($fourniture['produit_id']);
                            echo $product_info['designation'];

                            ?> </td>
                                    <td> <?php echo $fourniture['quantite_avant']; ?> </td>
                                    <td> <?php echo $fourniture['quantite_fournie']; ?> </td>
                                    <td> <?php
                            $product_info = $stock->getStockByID($fourniture['produit_id']);
                            echo number_format($product_info['prix'] * $fourniture['quantite_fournie']);
                            echo " FCFA";
                            ?> </td>
                                    <td>
                                        <a href="<?= $_SERVER['PHP_SELF'] . '?delPro=' . $fourniture['id'] ?>"
                                            class="btn btn-outline-danger">
                                            <span>
                                                <i class="fa-trash"></i>
                                            </span>
                                        </a>
                                    </td>
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

    </div>
    <?php include_once("./include/footer.php"); ?>