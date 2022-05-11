<?php include_once("./include/head.php"); ?>

<?php include_once("./include/aside.php"); ?>
<?php
$fournisseur = new Fournisseur();

if (isset($_POST['nom'])) {
  $fournisseur->addClient($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['adresse'], $_POST['telephone'], $_POST['type']);
  header("Location: fournisseur.php");
  exit();
}

?>



<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include_once("./include/nav.php"); ?>

    <div class="container-fluid py-4">
        <!-- Content HERE  -->
        <div class="card z-index-0">
            <div class="card-header text-center pt-4">
                <h5>Ajouter Fournisseur</h5>
            </div>
            <div class="card-body">
                <form method="post" role="form text-left">
                    <div class="mb-3">
                        <input required name="nom" type="text" class="form-control" placeholder="Nom" aria-label="Nom"
                            aria-describedby="email-addon">
                    </div>
                    <div class="mb-3">
                        <input required name="prenom" type="text" class="form-control" placeholder="Prenom"
                            aria-label="Prenom" aria-describedby="email-addon">
                    </div>

                    <div class="mb-3">
                        <input required name="email" type="email" class="form-control" placeholder="Email"
                            aria-label="Email" aria-describedby="email-addon">
                    </div>
                    <div class="mb-3">
                        <input required name="telephone" type="phone" class="form-control" placeholder="Telephone"
                            aria-label="Name" aria-describedby="email-addon">
                    </div>
                    <div class="mb-3">
                        <input required name="adresse" type="text" class="form-control" placeholder="Adresse"
                            aria-label="Name" aria-describedby="email-addon">
                    </div>
                    <div class="mb-3">
                        <input required name="type" type="text" class="form-control" placeholder="Type"
                            aria-label="Type" aria-describedby="email-addon">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
                            Creer un fournisseur <i class="fa-plus-circle"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>



        <?php include_once("./include/footer.php"); ?>