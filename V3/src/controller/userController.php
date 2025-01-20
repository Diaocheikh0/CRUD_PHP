<?php
class userController{
    function index(){
        global $modelU;
        $users = $modelU->getAll();
        require_once './src/view/users/listUser.php';
    }


    function remove(){
        global $modelU;
        $id = $_GET['id'];
        $modelU->delete($id);
        header('location:index.php?controller=user');
    }

    function pageAdd(){
        require_once './src/view/users/addUser.php';
    }

    function save(){
        global $modelU;
        $firstName = $_POST['firstName'];
        $lastName =$_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $modelU->add($firstName,$lastName,$email,$password);
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
            require_once './src/view/users/editUser.php';
        } else {
            header('Location: index.php?controller=user');
            exit();
        }
    }


    function updateEdit(){
        global $modelU;
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName =$_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $modelU->update($id,$firstName,$lastName,$email,$password);
        header("Location: index.php?controller=user");
    }

}

?>