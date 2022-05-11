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
  //get cart by nCommande
  public function getCartByNCommande($nCommande)
  {
    $sql = "SELECT * FROM cart WHERE nCommande = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nCommande]);

    while ($result = $stmt->fetchAll()) {
      return $result;
    }
  }


  //END READ

  //CREATE
  public function addCart($product_id, $quantity, $cart_id)
  {
    $sql = "INSERT INTO `cart` (`id`, `produit_id`, `quantite`, `livrer`, `nCommande`) VALUES (NULL, ?, ?, ?, ?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$product_id, $quantity, 0, $cart_id]);
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
