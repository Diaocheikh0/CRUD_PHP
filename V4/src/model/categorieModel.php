<?php

class CategorieModel{

    function getAll(){
        global $entityManager;
        $categories = $entityManager->getRepository(Categorie::class)->findAll();
        return $categories;
    }

    function getCategorieById($id) {
        global $entityManager;
        $categorie = $entityManager->find(Categorie::class, $id);
        return $categorie;
    }
    function delete($id){
        global $entityManager;
        $categorie = $entityManager->find(Categorie::class, $id);
        $entityManager->remove($categorie);
        $entityManager->flush();
    }

    function add($libelle){
        global $entityManager;
        $categorie = new Categorie();
        $categorie->setLibelle($libelle);
        $entityManager->persist($categorie);
        $entityManager->flush();
    }

    function update($id,$libelle){
        global $entityManager;
        $categorie = $this->getCategorieById($id);
        $categorie->setLibelle($libelle);
        $entityManager->flush();
    }
}





