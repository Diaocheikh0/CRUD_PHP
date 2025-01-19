<?php
    require_once('./model/categorieModel.php');

    function index(){
        $categorie = getAll();
    require_once './view/categorie/produit_list.html.twig';
    }

    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=categorie');
    }
    function pageAdd(){
        require_once './view/categorie/produit_add.html.twig';
    }

    function save(){
        $libelle =$_POST['libelle'];
        add($libelle);
        header('location:index.php?controller=categorie');
    }

    function edit() {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $categorie = getCategorieById($id);

            if (!$categorie) {
                header('Location: index.php');
                exit();
            }
            require_once './view/categorie/produit_edit.html.twig';
        } else {
            header('Location: index.php?controller=categorie');
            exit();
        }
    }

    function updateEdit(){
        $id = $_POST['id'];
        $libelle = $_POST['libelle'];

        update($id, $libelle);
        header("Location: index.php?controller=categorie");
    }
?>