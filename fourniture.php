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
              <h4>Les fournitures effectuées</h4>
              <div>
                <a href="newFourniture.php" class="btn btn-primary">
                  Ajouter Fourniture
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
                      <th>Date de la fourniture</th>
                      <th>Désignation</th>
                      <th>Qté Avec Fourniture</th>
                      <th>Qté Fournie</th>
                      <th>P.U</th>
                      <th>Montant de la Qté Fournie(Fcfa)</th>
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

        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h4>Suivi de la fourniture du jour</h4>
              <div>
                <a href="#" class="btn btn-primary">
                  Ajouter
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
                      <th>Date de la fourniture</th>
                      <th>Désignation</th>
                      <th>Qté Avant Fourniture</th>
                      <th>Qté Fournie</th>
                      <th>Montant de la Qté Fournie(Fcfa)</th>
                      <th>Montant Total des produits Fournis(Fcfa)</th>
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

      </div>
<?php include_once("./include/footer.php"); ?>