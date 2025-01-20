<?php
    require_once('./model/userModel.php');

    function index(){
        $users = getAll();
        require_once './view/users/listUser.php';
    }


    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=user');
    }

    function pageAdd(){
        require_once './view/users/addUser.php';
    }

    function save(){
        $nom =$_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];
        add($nom,$prenom,$email,$mot_de_passe);
        header('location:index.php?controller=user');
    }

    function edit() {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $user = getUserById($id);

            if (!$user) {
                header('Location: index.php?controller=user');
                exit();
            }
            require_once './view/users/editUser.php';
        } else {
            header('Location: index.php?controller=user');
            exit();
        }
    }


    function updateEdit(){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];

        update($id, $nom, $prenom, $email, $mot_de_passe);
        header("Location: index.php?controller=user");
    }


?>