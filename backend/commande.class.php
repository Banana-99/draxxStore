<?php

class Commande extends Dbh
{
  //READ
  public function getCommandes()
  {
    $sql = "SELECT * FROM commande";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getCommandeByID($id)
  {
    $sql = "SELECT * FROM commande WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    // send result to a variable and return it
    $result = $stmt->fetch();
    return $result;
  }

  //END READ

  //CREATE
  public function addCommande($id_client, $date_livraison, $nCommande)
  {
    $date = date("Y-m-d");
    $sql = "INSERT INTO `commande` (`id`, `date_commande`, `date_livraison`, `client_id`, `etat`, `nCommande`) VALUES (NULL, ?, ?, ?, 'en cours', ?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$date, $date_livraison, $id_client, $nCommande]);
  }

  //END CREATE
  // get commande by nCommande
  public function getCommandeByNCommande($nCommande)
  {
    $sql = "SELECT * FROM commande WHERE nCommande = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nCommande]);

    $result = $stmt->fetch();
    return $result;
  }

  //UPDATE
  public function updateCommande($id, $dateCommande, $status)
  {
    $sql = "UPDATE commande SET date_commande = ?, etat = ? WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$dateCommande, $status, $id]);
  }
  // add date livraison and client id to commande
  public function setupCommande($id, $dateLivraison, $client_id)
  {
    $sql = "UPDATE commande SET date_livraison = ?, client_id = ? WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$dateLivraison, $client_id, $id]);
  }

  //END UPDATE

  //DELETE
  public function deleteCommande($id)
  {
    $sql = "DELETE FROM commande WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
  //END DELETE
}