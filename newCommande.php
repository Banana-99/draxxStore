<?php include_once("./include/head.php"); ?>

<?php include_once("./include/aside.php"); ?>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include_once("./include/nav.php"); ?>
    
    <div class="container-fluid py-4">
    <!-- Content HERE  -->
    <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>NOUVELLE COMMANDE</h5>
              </div>
              <div class="card-body">
                <form role="form text-left">

                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Saisir un produit" aria-label="Name" aria-describedby="email-addon">
                  </div>

                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Choisir le produit" aria-label="Prenom" aria-describedby="email-addon">
                  </div>

                  <div class="mb-3">
                    <input type="number" class="form-control" placeholder="Quandité" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  
                  <div class="text-center">
                    <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Ajouter au panier</button>
                  </div>
                </form>
              </div>
            </div>


    <?php include_once("./include/footer.php"); ?>