<?php

class Stock extends Dbh
{
  // READ
  public function getStock()
  {
    $sql = "SELECT * FROM stocks";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getStockByID($id)
  {
    $sql = "SELECT * FROM stocks WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    // send result to a variable and return it
    $result = $stmt->fetch();
    return $result;
  }

  // END READ

  // CREATE
  public function addStock($designation, $quantite, $prix, $categorie, $type, $fournisseur)
  {
    $sql = "INSERT INTO `stocks` (`id`, `designation`, `quantite`, `prix`, `categorie`, `type`, `fournisseurs_id`) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$designation, $quantite, $prix, $categorie, $type, $fournisseur]);
  }

  // END CREATE
  // UPDATE
  public function updateStock($id, $designation, $quantite, $prix, $categorie, $type, $fournisseur)
  {
    $sql = "UPDATE stocks SET designation = ?, quantite = ?, prix = ?, categorie = ?, type = ?, fournisseurs_id = ? WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$designation, $quantite, $prix, $categorie, $type, $fournisseur, $id]);
  }

  // END UPDATE
  // DELETE
  public function deleteStock($id)
  {
    $sql = "DELETE FROM stocks WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
}