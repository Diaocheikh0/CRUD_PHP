<?php
class CategorieController {

    function index(){
        global $twig;
        global $modelC;
        $categories = $modelC->getAll();
        echo $twig->render('categorie/list.twig', ["categories" => $categories]);
    }

    function remove(){
        global $modelC;
        $id = $_GET['id'];
        $modelC->delete($id);
        header('location:index.php?controller=categorie');
    }
    function pageAdd(){
        global $twig;
        echo $twig->render('categorie/add.twig');
    }

    function save(){
        global $modelC;
        $libelle =$_POST['libelle'];
        $modelC->add($libelle);
        header('location:index.php?controller=categorie');
    }

    function edit() {
        global $twig;
        global $modelC;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $categorie = $modelC->getCategorieById($id);

            if (!$categorie) {
                header('Location: index.php');
                exit();
            }
            echo $twig->render('categorie/edit.twig', ["categorie" => $categorie]);
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