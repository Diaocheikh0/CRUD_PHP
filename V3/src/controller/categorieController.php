<?php
class CategorieController {

    function index(){
        global $modelC;
        $categories = $modelC->getAll();
        require_once './src/view/categorie/listCategorie.php';
    }

    function remove(){
        global $modelC;
        $id = $_GET['id'];
        $modelC->delete($id);
        header('location:index.php?controller=categorie');
    }
    function pageAdd(){
        require_once './src/view/categorie/addCategorie.php';
    }

    function save(){
        global $modelC;
        $libelle =$_POST['libelle'];
        $modelC->add($libelle);
        header('location:index.php?controller=categorie');
    }

    function edit() {
        global $modelC;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $categorie = $modelC->getCategorieById($id);

            if (!$categorie) {
                header('Location: index.php');
                exit();
            }
            require_once './src/view/categorie/editCategorie.php';
        } else {
            header('Location: index.php?controller=categorie');
            exit();
        }
    }

    function updateEdit(){
        global $modelC;
        $id = $_POST['id'];
        $libelle = $_POST['libelle'];

        $modelC->update($id, $libelle);
        header("Location: index.php?controller=categorie");
    }
}


?>