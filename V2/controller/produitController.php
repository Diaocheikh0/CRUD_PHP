<?php

class produitController {
    function index(){
        global $modelP;
        $produits = $modelP->getAll();
        require_once './view/produit/listProduit.php';
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
        require_once './view/produit/addProduit.php';
    }

    function save(){
        global $modelP;
        $libelle =$_POST['libelle'];
        $quantite = $_POST['quantite'];
        $prix_unitaire = $_POST['prix_unitaire'];
        $idcategorie = $_POST['idcategorie'];
        $modelP->add($libelle,$quantite,$prix_unitaire,$idcategorie);
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
            require_once './view/produit/editProduit.php';
        } else {
            header('Location: index.php?controller=produit');
            exit();
        }
    }


    function updateEdit(){
        global $modelP;
        $id = $_POST['id'];
        $libelle = $_POST['libelle'];
        $quantite = $_POST['quantite'];
        $prix_unitaire = $_POST['prix_unitaire'];
        $idcategorie = $_POST['idcategorie'];

        $modelP->update($id, $libelle, $quantite, $prix_unitaire, $idcategorie);
        header("Location: index.php?controller=produit");
    }
}

?>