<?php

    if (isset($_GET["controller"])) {
        $controller = $_GET["controller"];
    } else {
        $controller = "defaultController"; 
    }

    if($controller == "produit"){
        require_once './controller/produitController.php';
    }elseif($controller == "categorie"){
        require_once './controller/categorieController.php';
    }elseif($controller == "user"){
        require_once './controller/userController.php';
    }else{
        require_once './controller/interfaceController.php';
    }
    
    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='add'){
            pageAdd();
        }

        if($_GET['action']=='delete'){
            remove();
        }
        if($_GET['action']=='save'){
            save();
        }

        if($_GET['action']=='edit'){
            edit();
        }

        if($_GET['action']=='updateEedit'){
            updateEdit();
        }

    }else{
        index();
    }
 
  
