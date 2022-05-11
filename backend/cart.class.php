<?php

class Cart extends Dbh
{
  //READ
  public function getCart()
  {
    $sql = "SELECT * FROM cart";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getCartByID($id)
  {
    $sql = "SELECT * FROM cart WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    // send result to a variable and return it
    $result = $stmt->fetch();
    return $result;
  }

  //END READ

  //CREATE
  public function addCart($id_produit, $quantite, $commande)
  {
    $sql = "INSERT INTO `cart` (`id`, `id_produit`, `quantite`, `commande`) VALUES (NULL, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_produit, $quantite, $commande]);
  }


  //END CREATE

  //UPDATE
  public function updateCart($id, $id_produit, $quantite, $commande)
  {
    $sql = "UPDATE cart SET id_produit = ?, quantite = ?, commande = ? WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_produit, $quantite, $commande, $id]);
  }


  //END UPDATE

  //DELETE
  public function deleteCart($id)
  {
    $sql = "DELETE FROM cart WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }

  //END DELETE
}