<?php

class Stock extends Dbh
{
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
    $result = $stmt->fetch();
    return $result;
  }

  public function addStock($designation, $quantite, $prix, $categorie, $type, $fournisseur)
  {
    $sql = "INSERT INTO `stocks` (`id`, `designation`, `quantite`, `prix`, `categorie`, `type`, `fournisseurs_id`) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$designation, $quantite, $prix, $categorie, $type, $fournisseur]);
  }

  public function updateStock($id, $designation, $quantite, $prix, $categorie, $type, $fournisseur)
  {
    $sql = "UPDATE stocks SET designation = ?, quantite = ?, prix = ?, categorie = ?, type = ?, fournisseurs_id = ? WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$designation, $quantite, $prix, $categorie, $type, $fournisseur, $id]);
  }

  public function deleteStock($id)
  {
    $sql = "DELETE FROM stocks WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
}