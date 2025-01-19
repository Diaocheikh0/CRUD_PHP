<?php

class produitModel{
    function getAll(){
        global $entityManager;
        $products = $entityManager->getRepository(Product::class)->findAll();
        return $products;
    }

    function getProduitById($id) {
        global $entityManager;
        $product = $entityManager->find(Product::class, $id);
        return $product;
    }


    function getAllCatP(){
        global $entityManager;
        $categories = $entityManager->getRepository(Categorie::class)->findAll();
        return $categories;
    }


    function delete($id){
        global $entityManager;
        $product = $entityManager->find(Product::class, $id);
        $entityManager->remove($product);
        $entityManager->flush();
    }

    function add($libelle,$pu,$qt,$categorie_id){
        global $entityManager;
        $categorie = $entityManager->getRepository(Categorie::class)->find($categorie_id);
        $product = new Product();
        $product->setLibelle($libelle);
        $product->setPu($pu);
        $product->setQt($qt);
        $product->setCategorie($categorie);
        $entityManager->persist($product);
        $entityManager->flush();
    }

    function update($id,$libelle,$pu,$qt,$categorie_id){
        global $entityManager;
        $categorie = $entityManager->getRepository(Categorie::class)->find($categorie_id);
        $product = $entityManager->find(Product::class, $id);
        $product->setLibelle($libelle);
        $product->setPu($pu);
        $product->setQt($qt);
        $product->setCategorie($categorie);
        $entityManager->persist($product);
        $entityManager->flush();
    }
}






