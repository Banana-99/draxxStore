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
              <h4>Liste des commandes</h4>
              <div>
                <a href="newCommande.php" class="btn btn-primary">
                  Entrer une commande
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
                      <th>N° Commande</th>
                      <th>Date</th>
                      <th>Code Client</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Produit</th>
                      <th>P.U</th>
                      <th>Qté Commandée</th>
                      <th>PTTC (Fcfa)</th>
                      <th>Qté Livrée</th>
                      <th>Rest à Livrer</th>
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