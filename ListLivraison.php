<?php include_once("./include/head.php"); ?>

<?php include_once("./include/aside.php"); ?>
  
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
                <a href="newLivraison.php" class="btn btn-primary">
                  Faire une Livraison
                  <span>
                    <i class="fa-plus-circle"></i>
                  </span>
                </a>
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