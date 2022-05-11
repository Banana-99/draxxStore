<?php

class Commande extends Dbh
{
  //READ
  public function getCommandes()
  {
    $sql = "SELECT * FROM commandes";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getCommandeByID($id)
  {
    $sql = "SELECT * FROM commandes WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    // send result to a variable and return it
    $result = $stmt->fetch();
    return $result;
  }

  //END READ

  //CREATE
  public function addCommande($dateCommande, $status)
  {
    $date = date("Y-m-d");
    $sql = "INSERT INTO `commande` (`id`, `date_commande`, `date_livraison`, `client_id`, `etat`) VALUES (NULL, ?, NULL, NULL, ?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$dateCommande, $status]);

    // get the last inserted id
    $last_id = $this->connect()->lastInsertId();
    return $last_id;
  }

  //END CREATE

  //UPDATE
  public function updateCommande($id, $dateCommande, $status)
  {
    $sql = "UPDATE commandes SET date_commande = ?, etat = ? WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$dateCommande, $status, $id]);
  }
  // add date livraison and client id to commande
  public function setupCommande($id, $dateLivraison, $client_id)
  {
    $sql = "UPDATE commandes SET date_livraison = ?, client_id = ? WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$dateLivraison, $client_id, $id]);
  }

  //END UPDATE

  //DELETE
  public function deleteCommande($id)
  {
    $sql = "DELETE FROM commandes WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
  //END DELETE
}