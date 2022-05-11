<?php include_once("./include/head.php"); ?>

<?php
include_once("./include/aside.php");
?>

<?php
$fournisseurs = new Fournisseur();
$stock = new Stock();

if (isset($_POST['submit'])) {
  $stock->addStock($_POST['designation'], $_POST['quantite'], $_POST['prix'], $_POST['categorie'], $_POST['type'], $_POST['fournisseur']);
  // head to stock 
  header("Location: stock.php");
  exit();
}
?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include_once("./include/nav.php"); ?>

    <div class="container-fluid py-4">
        <!-- Content HERE  -->
        <div class="card z-index-0">
            <div class="card-header text-center pt-4">
                <h5>Ajouter un produit</h5>
            </div>
            <div class="card-body">
                <form method="post" role="form text-left">

                    <div class="mb-2">
                        <input name="designation" required type="text" class="form-control" placeholder="Designation"
                            aria-label="Designation" aria-describedby="Designation-addon">
                    </div>

                    <div class="mb-2">
                        <input name="quantite" required type="number" class="form-control" placeholder="Quantité"
                            aria-label="Quantité" aria-describedby="Quantité-addon">
                    </div>

                    <div class="mb-2">
                        <input name='prix' required type="number" class="form-control" placeholder="Prix Unitaire"
                            aria-label="Prix Unitaire" aria-describedby="Prix Unitaire-addon">
                    </div>

                    <div class="mb-2">
                        <select class="form-control" name="categorie" aria-label="Catégorie"
                            aria-describedby="Catégorie-addon">
                            <option selected>Catégorie (facultatif) </option>
                            <option>Telephone</option>
                            <option>Jus</option>
                            <option>Ordinateur</option>
                            <option>Cosmetique</option>
                            <option>Autres</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <select name="type" class="form-control" aria-label="Type" aria-describedby="Type-addon">
                            <option selected>Type (facultatif) </option>
                            <option>Boisson</option>
                            <option>Eletronic</option>
                            <option>Autres</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <select name="fournisseur" required class="form-control" aria-label="Fournis"
                            aria-describedby="Fournis-addon">
                            <option selected> Fournisseur </option>
                            <?php
              $fournisseurs = $fournisseurs->getFournisseurs();
              if (!empty($fournisseurs)) {
                foreach ($fournisseurs as $fournisseur) {
              ?>
                            <option value="<?php echo $fournisseur['id']; ?>">
                                <?php echo $fournisseur['nom']; ?>
                            </option>
                            <?php
                }
              }
              ?>
                        </select>
                    </div>

                    <div class="text-center">
                        <button name="submit" type="submit" class="btn bg-gradient-dark w-30 my-2 mb-2">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>



        <?php include_once("./include/footer.php"); ?>