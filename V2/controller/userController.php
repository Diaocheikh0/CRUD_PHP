<?php
class userController{
    function index(){
        global $modelU;
        $users = $modelU->getAll();
        require_once './view/users/user_list.html.twig';
    }


    function remove(){
        global $modelU;
        $id = $_GET['id'];
        $modelU->delete($id);
        header('location:index.php?controller=user');
    }

    function pageAdd(){
        require_once './view/users/user_add.html.twig';
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
            require_once './view/users/user_edit.html.twig';
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