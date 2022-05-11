<?php include_once("./include/head.php"); ?>

<?php
include_once("./include/aside.php");
?>
<?php
$client = new Client();
$stock = new Stock();
$cart = new Cart();
$commande = new Commande();

$cart_elements = array();
if (isset($_GET['cart'])) {
    $cart = $_GET['cart'];
}

if (isset($_POST['product'])) {
    // if cart get issset then add panier else create panier
    if (isset($_GET['cart'])) {
        $cart->addCart($_POST['product'], $_POST['quantity'], $_GET['cart']);
    } else {
        // create a commande 
        $commande_id = $commande->addCommande(date("Y-m-d"), "en cours");
        // add cart to commande
        $cart->addCart($_POST['product'], $_POST['quantity'], $commande_id);
        // header to redirect to commande page with the commande id
        header("Location: commande.php?cart=$commande_id");
    }
}
?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include_once("./include/nav.php"); ?>

    <div class="container-fluid py-4">
        <!-- Content HERE  -->

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-4">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4> Choisir un produit</h4>
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
                                        <input type="number" class="form-control" id="quantity" name="quantity"
                                            placeholder="Quantité">
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Ajouter au panier
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4>Liste des commandes</h4>
                        </div>
                        <div class="card-body px-0 pt-0 pb-0">
                            <div class="table-responsive p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nom prodit</th>
                                            <th> Prix unitaire</th>
                                            <th>Quantité</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4>Panier de la commande en cours</h4>
                            <div>
                                <a href="#" class="btn btn-primary">
                                    Panier
                                    <span>
                                        <i class="fa-plus-circle"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-0">
                            <div class="table-responsive p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Référence Produit</th>
                                            <th>Prix Unitaire</th>
                                            <th>Quantité</th>
                                            <th>Montant Total (Fcfa)</th>
                                            <th>Total du panier (Fcfa)</th>
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
                                                01/05/1980
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