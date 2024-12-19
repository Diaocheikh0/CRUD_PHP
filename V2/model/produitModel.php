<?php

class produitModel{
    function getAll(){
        global $connexion;
        $sql ="SELECT * FROM produit";
        return $connexion->query($sql)->fetchAll();
    }

    function getProduitById($id) {
        global $connexion;
        $sql = "SELECT * FROM produit WHERE id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
        return $smtp->fetch();
    }


    function getAllCatP(){
        global $connexion;
        $sql = "SELECT * FROM categorie";
        return $connexion->query($sql)->fetchAll();
    }


    function delete($id){
        global $connexion;
        $sql ="DELETE FROM produit WHERE id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
    }

    function add($libelle,$quantite,$prix_unitaire,$idcategorie){
        global $connexion;
        $sql ="INSERT INTO produit (libelle,quantite,prix_unitaire,idcategorie) values (?,?,?,?)";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$libelle,$quantite,$prix_unitaire,$idcategorie]);
    }

    function update($id,$libelle,$quantite,$prix_unitaire,$idcategorie){
        global $connexion;
        $sql ="UPDATE produit SET libelle = ?,quantite = ?,prix_unitaire = ?,idcategorie = ? where id= ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$libelle,$quantite,$prix_unitaire,$idcategorie, $id]);
    }
}






