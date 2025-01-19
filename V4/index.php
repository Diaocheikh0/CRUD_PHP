<?php

    require_once 'bootstrap.php';
    require_once './src/model/Categorie.php';
    require_once './src/model/Produit.php';
    require_once './src/model/User.php';
    require_once './src/model/categorieModel.php';
    require_once './src/model/produitModel.php';
    require_once './src/model/userModel.php';
    require_once './src/controller/categorieController.php';
    require_once './src/controller/interfaceController.php';
    require_once './src/controller/produitController.php';
    require_once './src/controller/userController.php';

    require_once './vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader([
        './src/view/',
        './src/view/categorie/',
        './src/view/produit/',
        './src/view/users/'
    ]);
    $twig = new \Twig\Environment($loader, []);

    $modelC = new CategorieModel();
    $modelP = new ProduitModel();
    $modelU = new UserModel();


    if (isset($_GET["controller"])) {
        $controller = $_GET["controller"];
    } else {
        $controller = "defaultController"; 
    }

    if ($controller == "produit") {
        $ctl = new ProduitController();
    } elseif ($controller == "categorie") {
        $ctl = new CategorieController();
    } elseif ($controller == "user") {
        $ctl = new UserController();
    } else {
        $ctl = new InterfaceController();
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
 
  
