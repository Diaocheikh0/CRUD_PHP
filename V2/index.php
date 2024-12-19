<?php

    require_once './model/db.php';
    require_once './model/categorieModel.php';
    require_once './model/produitModel.php';
    require_once './model/userModel.php';
    require_once './controller/categorieController.php';
    require_once './controller/interfaceController.php';
    require_once './controller/produitController.php';
    require_once './controller/userController.php';

    $database = new Database();
    $connexion = $database->getConnexion();
    $modelC = new CategorieModel();
    $modelP = new ProduitModel();
    $modelU = new UserModel();


    if (isset($_GET["controller"])) {
        $controller = $_GET["controller"];
    } else {
        $controller = "defaultController"; 
    }

    if ($controller == "produit") {
        $ctl = new ProduitController($connexion);
    } elseif ($controller == "categorie") {
        $ctl = new CategorieController($connexion);
    } elseif ($controller == "user") {
        $ctl = new UserController($connexion);
    } else {
        $ctl = new InterfaceController($connexion);
    }


    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='add'){
            $ctl->pageAdd();
        }

        if($_GET['action']=='delete'){
            $ctl->remove();
        }
        if($_GET['action']=='save'){
            $ctl->save();
        }

        if($_GET['action']=='edit'){
            $ctl->edit();
        }

        if($_GET['action']=='updateEedit'){
            $ctl->updateEdit();
        }

    }else{
        $ctl->index();
    }
 
  
