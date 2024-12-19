<?php

require_once('./model/db.php');

    function getAll(){
        global $connexion;
        $sql ="SELECT * FROM produit";
        return pg_query($connexion,$sql);
    }

    function getProduitById($id) {
        global $connexion;
        $id = pg_escape_string($connexion, $id);
        $sql = "SELECT * FROM produit WHERE id = '$id'";
        $result = pg_query($connexion, $sql);
        if (!$result) {
            return null;
        }
        $produit = pg_fetch_assoc($result);
        return $produit ? $produit : null;
    }


    function getAllCatP(){
        global $connexion;
        $sql = "SELECT * FROM categorie";
        $result = pg_query($connexion, $sql);
        return pg_fetch_all($result);
    }


    function delete($id){
        global $connexion;
        $sql ="DELETE FROM produit WHERE id =$id";
        return pg_query($connexion,$sql);
    }

    function add($libelle,$quantite,$prix_unitaire,$idcategorie){
        global $connexion;
        $sql ="INSERT INTO produit (libelle,quantite,prix_unitaire,idcategorie) values ('$libelle',$quantite,$prix_unitaire,$idcategorie)";
        return pg_query($connexion,$sql);
    }

    function update($id,$libelle,$quantite,$prix_unitaire,$idcategorie){
        global $connexion;
        $sql ="UPDATE produit SET libelle='$libelle',quantite=$quantite,prix_unitaire=$prix_unitaire,idcategorie=$idcategorie where id=$id";
       return pg_query($connexion,$sql);
}




