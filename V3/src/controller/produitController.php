<?php

class produitController {

    function index(){
        global $modelP;
        $products = $modelP->getAll();
        require_once './src/view/produit/listProduit.php';
    }


    function remove(){
        global $modelP;
        $id = $_GET['id'];
        $modelP->delete($id);
        header('location:index.php?controller=produit');
    }
    function pageAdd(){
        global $modelP;
        $categories = $modelP->getAllCatP();
        require_once './src/view/produit/addProduit.php';
    }

    function save(){
        global $modelP;
        $libelle =$_POST['libelle'];
        $pu = $_POST['pu'];
        $qt = $_POST['qt'];
        $categorie_id = $_POST['categorie_id'];
        $modelP->add($libelle,$pu,$qt,$categorie_id);
        header('location:index.php?controller=produit');
    }

    function edit() {
        global $modelP;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $produit = $modelP->getProduitById($id);
            $categories = $modelP->getAllCatP();

            if (!$produit) {
                header('Location: index.php');
                exit();
            }
            require_once './src/view/produit/editProduit.php';
        } else {
            header('Location: index.php?controller=produit');
            exit();
        }
    }


    function updateEdit(){
        global $modelP;
        $id = $_POST['id'];
        $libelle = $_POST['libelle'];
        $pu = $_POST['pu'];
        $qt = $_POST['qt'];
        $categorie_id = $_POST['categorie_id'];

        $modelP->update($id, $libelle, $pu, $qt, $categorie_id);
        header("Location: index.php?controller=produit");
    }
}

?>