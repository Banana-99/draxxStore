<?php include_once("./include/head.php"); ?>

<?php
// include_once("./include/aside.php");
?>
<?php
$client = new Client();
$stock = new Stock();
$cart = new Cart();
$cart_id = null;
$commande = new Commande();


$cart_elements = array();
if (isset($_GET['cart'])) {
    $cart_id = $_GET['cart'];
}

if (isset($_POST['product'])) {
    if (isset($_GET['cart'])) {
        $cart->addCart($_POST['product'], $_POST['quantite'], $_GET['cart']);
    } else {
        // create a random id
        $cart_id = uniqid();
        // add cart
        $cart->addCart($_POST['product'], $_POST['quantite'], $cart_id);
        echo "<script>window.location.href = 'nouveauCommande.php?cart=" . $cart_id . "'</script>";
    }
}

if (isset($_POST['creer'])) {

    // add a commande with the cart id
    $commande->addCommande($_POST['client'], $_POST['date'], $_GET['cart']);
    echo "<script>window.location.href = 'commande.php'</script>";
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
                                        <label for="quantite">Quantité</label>
                                        <input type="number" class="form-control" id="quantite" name="quantite"
                                            placeholder="Quantité">
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Ajouter au panier
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-4">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4> Choisir un client</h4>
                            </div>
                            <div class="card-body">
                                <!-- form with a dropdown and a text and a button -->
                                <form method="post">
                                    <div class="form-group">
                                        <label for="product">Client</label>
                                        <select required class="form-control" id="client" name="client">
                                            <option value="">Choisir un client</option>
                                            <?php
                                            $clients = $client->getClients();
                                            if (!empty($clients)) {
                                                foreach ($clients as $c) {
                                            ?>
                                            <option value="<?php echo $c['id']; ?>">
                                                <?php echo $c['nom'] . " " . $c['prenom'] ?>
                                            </option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Date de livraison</label>
                                        <input type="date" class="form-control" id="ate" name="date"
                                            placeholder="date de livraison">
                                    </div>
                                    <button name="creer" type="submit" class="btn btn-primary">
                                        Creer la commande
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
                                        <?php
                                        if (isset($_GET['cart'])) {
                                            $cart_elements = $cart->getCart($_GET['cart']);
                                            if (!empty($cart_elements)) {
                                                foreach ($cart_elements as $cart_element) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php
                                                            // get stock by id 
                                                            $product = $stock->getStockById($cart_element['produit_id']);
                                                            echo $product['designation'];

                                                            ?>
                                            </td>
                                            <td>
                                                <?php
                                                            $product = $stock->getStockById($cart_element['produit_id']);
                                                            echo number_format($product['prix']);
                                                            echo " FCFA";
                                                            ?>
                                            </td>
                                            <td>
                                                <?php echo $cart_element['quantite']; ?>
                                            </td>
                                            <td>
                                                <?php
                                                            $product = $stock->getStockById($cart_element['produit_id']);
                                                            echo number_format($product['prix'] * $cart_element['quantite']);
                                                            echo " FCFA";
                                                            ?>


                                        </tr>
                                        <?php
                                                }
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