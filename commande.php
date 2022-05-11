<?php include_once("./include/head.php"); ?>

<?php
include_once("./include/aside.php");
?>
<?php
$fournisseurs = new Fournisseur();
$stock = new Stock();
$commande = new Commande();
$cart = new Cart();
$clients = new Client();

?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include_once("./include/nav.php"); ?>

    <div class="container-fluid py-4">
        <!-- Content HERE  -->

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="card mb-4">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4>Liste des commandes</h4>
                        </div>
                        <div class="card-body px-0 pt-0 pb-0">
                            <div class="table-responsive p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>N Commande</th>
                                            <th>Produit</th>
                                            <th>Date de livraison </th>
                                            <th>Client </th>
                                            <th> Prix unitaire</th>
                                            <th>Quantité</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $commandes = $commande->getCommandes();
                                        if (!empty($commandes)) {
                                            foreach ($commandes as $commande) {
                                                // for each commande, get the corresponding nCommande from cart
                                                $nCommande = $commande['nCommande'];

                                                $cart_curr = $cart->getCartByNCommande($nCommande);
                                                foreach ($cart_curr as $cart_curr) { ?>
                                        <tr>
                                            <td> <?php echo $commande['id']; ?> </td>
                                            <td> <?php
                                                                // get the corresponding produit from stock
                                                                $produit = $stock->getStockByID($cart_curr['produit_id']);
                                                                echo $produit['designation'];

                                                                ?> </td>
                                            <td> <?php echo $commande['date_livraison']; ?> </td>
                                            <td> <?php
                                                                // get the corresponding client from client
                                                                $client = $clients->getClientByID($commande['client_id']);
                                                                echo $client['nom'];
                                                                echo " ";
                                                                echo $client['prenom'];
                                                                ?> </td>
                                            <td> <?php
                                                                // get the corresponding produit from stock
                                                                $produit = $stock->getStockByID($cart_curr['produit_id']);
                                                                echo $produit['prix'];

                                                                ?> </td>
                                            <td> <?php echo $cart_curr['quantite']; ?> </td>
                                            <td> <?php
                                                                echo $cart_curr['quantite'] * $produit['prix'];
                                                                ?> </td>
                                        </tr>
                                        <?php }
                                            }
                                        } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <?php include_once("./include/footer.php"); ?>