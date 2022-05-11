<?php include_once("./include/head.php"); ?>

<?php
include_once("./include/aside.php");
?>

<?php
$stock = new Stock();
$fourniture = new Fourniture();

if (isset($_POST['ajouter'])) {
    //get the product info
    $product_info = $stock->getStockByID($_POST['product']);
    $fourniture->addFourniture($product_info['quantite'], $_POST['quantite'], $_POST['product']);
    // echo script to reload the page with post data
    echo "<script>window.location.href = 'nouveauFourniture.php';</script>";
}

if (isset($_GET['delPro'])) {
    $fourniture->deleteFourniture($_GET['delPro']);
    // head to self
    echo "<script>window.location.href = 'nouveauFourniture.php';</script>";
}
?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include_once("./include/nav.php"); ?>

    <div class="container-fluid py-4">
        <!-- Content HERE  -->

        <div class="row">
            <div class="col-6">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4> Choisir un produit</h4>
                        <div class="d-flex">
                            <a href="fourniture.php" class="btn btn-primary">Liste des commande</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- form with a dropdown and a text and a button -->
                        <form method="post">
                            <div class="form-group">

                                <label for="product">Produit</label>
                                <select required class="form-control" id="product" name="product">
                                    <option value="">Choisir un produit</option>
                                    <?php
                                    $products = $stock->getStock();
                                    if (!empty($products)) {
                                        foreach ($products as $product) {
                                    ?>
                                    <option value="<?php echo $product['id']; ?>">
                                        <?php echo $product['designation']; ?>
                                    </option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantité</label>
                                <input type="number" class="form-control" id="quantity" name="quantite"
                                    placeholder="Quantité">
                            </div>
                            <a href='<?= $_SERVER['PHP_SELF'] ?>' class="btn btn-outline-primary">
                                Effacer
                            </a>
                            <button name="ajouter" type="submit" class="btn btn-primary">
                                Ajouter
                            </button>


                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h4>Suivi de la fourniture du jour</h4>

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
                                $fournitures = $fourniture->getFournituresAujourdhui();
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