<?php

class produitController {

    function index(){
        global $twig;
        global $modelP;
        $products = $modelP->getAll();
        echo $twig->render('produit/list.twig', ['products' => $products]);
    }


    function remove(){
        global $modelP;
        $id = $_GET['id'];
        $modelP->delete($id);
        header('location:index.php?controller=produit');
    }
    function pageAdd(){
        global $twig;
        global $modelP;
        $categories = $modelP->getAllCatP();
        echo $twig->render('produit/add.twig', ['categories' => $categories]);
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
        global $twig;
        global $modelP;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $produit = $modelP->getProduitById($id);
            $categories = $modelP->getAllCatP();

            if (!$produit) {
                header('Location: index.php');
                exit();
            }
            echo $twig->render('produit/edit.twig', ['produit' => $produit, 'categories' => $categories]);
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