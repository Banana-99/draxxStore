<?php

class Fourniture extends Dbh
{
    public function getFournitures()
    {
        $sql = "SELECT * FROM fournitures";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        };
    }

    public function getFournitureByID($id)
    {
        $sql = "SELECT * FROM fournitures WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $result = $stmt->fetch();
        return $result;
    }

    public function addFourniture($q_avant, $q_apres, $produit)
    {
        $date = date("Y-m-d");
        echo '<script>alert("' . $date . '")</script>';
        $sql = "INSERT INTO `fournitures` (`id`, `quantite_avant`, `quantite_fournie`, `produit_id`, `date`) VALUES (NULL, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$q_avant, $q_apres, $produit, $date]);
    }

    public function updateFourniture($id, $q_avant, $q_apres, $produit, $date)
    {
        $sql = "UPDATE fournitures SET quantite_avant = ?, quantite_fournie = ?, produit_id = ?, date = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$q_avant, $q_apres, $produit, $date, $id]);
    }

    public function deleteFourniture($id)
    {
        $sql = "DELETE FROM fournitures WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    public function getFournituresAujourdhui()
    {
        $date = date("Y-m-d");
        $sql = "SELECT * FROM fournitures WHERE date = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$date]);

        while ($result = $stmt->fetchAll()) {
            return $result;
        };
    }
}