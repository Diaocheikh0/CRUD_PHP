<?php

class UserModel {
    function getAll(){
        global $connexion;
        $sql ="SELECT * FROM users";
        return $connexion->query($sql)->fetchAll();
    }

    function getUserById($id) {
        global $connexion;
        $sql = "SELECT * FROM users WHERE id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
        return $smtp->fetch();
    }

    function delete($id){
        global $connexion;
        $sql ="DELETE FROM users WHERE id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
    }

    function add($nom,$prenom,$email,$mot_de_passe){
        global $connexion;
        $sql ="INSERT INTO users (nom,prenom,email,mot_de_passe) values (?, ?, ?, ?)";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$nom,$prenom,$email,$mot_de_passe]);
    }

    function update($id,$nom,$prenom,$email,$mot_de_passe){
        global $connexion;
        $sql ="UPDATE users SET nom= ?,prenom= ?,email= ?,mot_de_passe= ? where id= ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$nom, $prenom, $email, $mot_de_passe, $id]);
    }
}





