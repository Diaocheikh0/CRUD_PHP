<?php
class userController{
    function index(){
        global $twig;
        global $modelU;
        $users = $modelU->getAll();
        echo $twig->render('users/list.twig', ['users' => $users]);
    }


    function remove(){
        global $modelU;
        $id = $_GET['id'];
        $modelU->delete($id);
        header('location:index.php?controller=user');
    }

    function pageAdd(){
        global $twig;
        echo $twig->render('users/add.twig');
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
        global $twig;
        global $modelU;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $user = $modelU->getUserById($id);

            if (!$user) {
                header('Location: index.php?controller=user');
                exit();
            }
            echo $twig->render('users/edit.twig', ['user' => $user]);
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