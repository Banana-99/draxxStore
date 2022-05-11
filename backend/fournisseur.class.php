<?php

class Fournisseur extends Dbh
{
  //READ
  public function getfournisseurs()
  {
    $sql = "SELECT * FROM fournisseurs";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getFournisseurByID($id)
  {
    $sql = "SELECT * FROM fournisseurs WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    // send result to a variable and return it
    $result = $stmt->fetch();
    return $result;
  }
  //END READ

  //CREATE

  public function addFournisseur($nom, $prenom, $email, $adresse, $telephone, $type)
  {
    $sql = "INSERT INTO `fournisseurs` (`id`, `nom`, `prenom`, `email`, `adresse`, `telephone`, `type`) VALUES (NULL, ?, ?, ?, ?, ?, ?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $adresse, $telephone, $type]);
  }

  //END CREATE

  //UPDATE
  public function updateFournisseur($id, $nom, $prenom, $email, $adresse, $telephone, $type)
  {
    $sql = "UPDATE fournisseurs SET nom = ?, prenom = ?, email = ?, adresse = ?, telephone = ?, type = ? WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $adresse, $telephone, $type, $id]);
  }


  //END UPDATE

  //DELETE
  public function deleteFournisseur($id)
  {
    $sql = "DELETE FROM fournisseurs WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
  //END DELETE
}