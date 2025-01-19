<?php

class userModel {
    function getAll(){
        global $entityManager;
        $users = $entityManager->getRepository(user::class)->findAll();
        return $users;
    }

    function getUserById($id) {
        global $entityManager;
        $user = $entityManager->getRepository(user::class)->find($id);
        return $user;
    }

    function delete($id){
        global $entityManager;
        $user = $entityManager->getRepository(user::class)->find($id);
        $entityManager->remove($user);
        $entityManager->flush();
    }

    function add($firstName,$lastName,$email,$password){
        global $entityManager;
        $user = new user();
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setEmail($email);
        $user->setPassword($password);
        $entityManager->persist($user);
        $entityManager->flush();
    }

    function update($id,$firstName,$lastName,$email,$password){
        global $entityManager;
        $user = $entityManager->getRepository(user::class)->find($id);
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setEmail($email);
        $user->setPassword($password);
        $entityManager->persist($user);
        $entityManager->flush();
    }
}





