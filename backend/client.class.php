<?php

class Client extends Dbh
{
  //READ
  public function getClients()
  {
    $sql = "SELECT * FROM clients";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getClientByID($id)
  {
    $sql = "SELECT * FROM clients WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    // send result to a variable and return it
    $result = $stmt->fetch();
    return $result;
  }
  //END READ

  //CREATE

  public function addClient($nom, $prenom, $email, $adresse, $telephone, $type)
  {
    $sql = "INSERT INTO clients (nom, prenom, email, adresse, telephone, type) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $adresse, $telephone, $type]);
  }

  //END CREATE

  //UPDATE
  public function updateClient($id, $nom, $prenom, $email, $adresse, $telephone, $type)
  {
    $sql = "UPDATE clients SET nom = ?, prenom = ?, email = ?, adresse = ?, telephone = ?, type = ? WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $adresse, $telephone, $type, $id]);
  }


  //END UPDATE

  //DELETE
  public function deleteClient($id)
  {
    $sql = "DELETE FROM clients WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
  //END DELETE
}