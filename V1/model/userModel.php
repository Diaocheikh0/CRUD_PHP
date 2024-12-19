<?php

    require_once('./model/db.php');

    function getAll(){
        global $connexion;
        $sql ="SELECT * FROM users";
        return pg_query($connexion,$sql);
    }

    function getUserById($id) {
        global $connexion;
        $id = pg_escape_string($connexion, $id);
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = pg_query($connexion, $sql);
        if (!$result) {
            return null;
        }
        $users = pg_fetch_assoc($result);
        return $users ? $users : null;
    }

    function delete($id){
        global $connexion;
        $sql ="DELETE FROM users WHERE id =$id";
        return pg_query($connexion,$sql);
    }

    function add($nom,$prenom,$email,$mot_de_passe){
        global $connexion;
        $sql ="INSERT INTO users (nom,prenom,email,mot_de_passe) values ('$nom','$prenom','$email','$mot_de_passe')";
        return pg_query($connexion,$sql);
    }

    function update($id,$nom,$prenom,$email,$mot_de_passe){
        global $connexion;
        $sql ="UPDATE users SET nom='$nom',prenom='$prenom',email='$email',mot_de_passe='$mot_de_passe' where id=$id";
        return pg_query($connexion,$sql);
    }




