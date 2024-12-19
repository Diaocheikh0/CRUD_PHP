<?php
class userController{
    function index(){
        global $modelU;
        $users = $modelU->getAll();
        require_once './view/users/listUser.php';
    }


    function remove(){
        global $modelU;
        $id = $_GET['id'];
        $modelU->delete($id);
        header('location:index.php?controller=user');
    }

    function pageAdd(){
        require_once './view/users/addUser.php';
    }

    function save(){
        global $modelU;
        $nom =$_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];
        $modelU->add($nom,$prenom,$email,$mot_de_passe);
        header('location:index.php?controller=user');
    }

    function edit() {
        global $modelU;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $user = $modelU->getUserById($id);

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
        global $modelU;
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];

        $modelU->update($id, $nom, $prenom, $email, $mot_de_passe);
        header("Location: index.php?controller=user");
    }

}

?>