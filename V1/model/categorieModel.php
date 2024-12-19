<?php

require_once('./model/db.php');

    function getAll(){
        global $connexion;
        $sql ="SELECT * FROM categorie";
        return pg_query($connexion,$sql);
    }

    function getCategorieById($id) {
        global $connexion;
        $id = pg_escape_string($connexion, $id);
        $sql = "SELECT * FROM categorie WHERE id = '$id'";
        $result = pg_query($connexion, $sql);
        if (!$result) {
            return null;
        }
        $categorie = pg_fetch_assoc($result);
        return $categorie ? $categorie : null;
    }
    function delete($id){
        global $connexion;
        $sql ="DELETE FROM categorie WHERE id =$id";
        return pg_query($connexion,$sql);
    }

    function add($libelle){
        global $connexion;
        $sql ="INSERT INTO categorie (libelle) values ('$libelle')";
        return pg_query($connexion,$sql);
    }

    function update($id,$libelle){
        global $connexion;
        $sql ="UPDATE categorie SET libelle='$libelle' where id=$id";
        return pg_query($connexion,$sql);
    }




