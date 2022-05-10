<?php include_once("./include/head.php"); ?>

<?php include_once("./include/aside.php"); ?>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include_once("./include/nav.php"); ?>
    
    <div class="container-fluid py-4">
    <!-- Content HERE  -->
    <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>Register with</h5>
              </div>
              <div class="card-body">
                <form role="form text-left">

                  <div class="mb-2">
                    <input type="text" class="form-control" placeholder="Designation" aria-label="Designation" aria-describedby="Designation-addon">
                  </div>

                  <div class="mb-2">
                    <input type="number" class="form-control" placeholder="Quantité" aria-label="Quantité" aria-describedby="Quantité-addon">
                  </div>
                  
                  <div class="mb-2">
                    <input type="number" class="form-control" placeholder="Prix Unitaire" aria-label="Prix Unitaire" aria-describedby="Prix Unitaire-addon">
                  </div>

                  <div class="mb-2">
                    <select class="form-control"  aria-label="Catégorie" aria-describedby="Catégorie-addon">
                    <option selected>Catégorie (facultatif) </option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                  </div>

                  <div class="mb-2">
                    <select class="form-control"  aria-label="Type" aria-describedby="Type-addon">
                    <option selected>Type (facultatif) </option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                  </div>

                  <div class="mb-2">
                    <select class="form-control"  aria-label="Fournis" aria-describedby="Fournis-addon">
                    <option selected> Fournisseur </option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                  </div>
                  
                  <div class="text-center">
                    <button type="button" class="btn bg-gradient-dark w-30 my-2 mb-2">Ajouter</button>
                  </div>

                  <div class="text-center">
                    <button type="button" class="btn bg btn-danger w-25 my-2 mb-2">Effacer</button>
                  </div>
                </form>
              </div>
            </div>



    <?php include_once("./include/footer.php"); ?>