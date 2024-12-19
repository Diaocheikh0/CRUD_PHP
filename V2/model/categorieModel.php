<?php

class CategorieModel{

    function getAll(){
        global $connexion;
        $sql ="SELECT * FROM categorie";
        return $connexion->query($sql)->fetchAll();
    }

    function getCategorieById($id) {
        global $connexion;
        $sql = "SELECT * FROM categorie WHERE id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
        return $smtp->fetch();
    }
    function delete($id){
        global $connexion;
        $sql ="DELETE FROM categorie WHERE id =?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
    }

    function add($libelle){
        global $connexion;
        $sql ="INSERT INTO categorie (libelle) values (?)";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$libelle]);
    }

    function update($id,$libelle){
        global $connexion;
        $sql ="UPDATE categorie SET libelle= ? where id=?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$libelle,$id]);
    }
}





