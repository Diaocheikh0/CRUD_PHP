<?php
    require_once('./model/produitModel.php');

    function index(){
       $produits = getAll();
       require_once './view/produit/produit_list.html.twig';
    }


    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=produit');
    }
    function pageAdd(){
        $categories = getAllCatP();
        require_once './view/produit/produit_add.html.twig';
    }

    function save(){
        $libelle =$_POST['libelle'];
        $quantite = $_POST['quantite'];
        $prix_unitaire = $_POST['prix_unitaire'];
        $idcategorie = $_POST['idcategorie'];
        add($libelle,$quantite,$prix_unitaire,$idcategorie);
        header('location:index.php?controller=produit');
    }

    function edit() {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $produit = getProduitById($id);
            $categories = getAllCatP();

            if (!$produit) {
                header('Location: index.php');
                exit();
            }
            require_once './view/produit/produit_edit.html.twig';
        } else {
            header('Location: index.php?controller=produit');
            exit();
        }
    }


    function updateEdit(){
        $id = $_POST['id'];
        $libelle = $_POST['libelle'];
        $quantite = $_POST['quantite'];
        $prix_unitaire = $_POST['prix_unitaire'];
        $idcategorie = $_POST['idcategorie'];

        update($id, $libelle, $quantite, $prix_unitaire, $idcategorie);
        header("Location: index.php?controller=produit");
    }


?>