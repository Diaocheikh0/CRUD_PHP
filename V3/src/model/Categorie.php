<?php
// src/Product.php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'categories')]
class Categorie
    {
        #[ORM\Id]
        #[ORM\Column(type: 'integer')]
        #[ORM\GeneratedValue]
        private int|null $id = null;
        #[ORM\Column(type: 'string')]
        private string $libelle;

        public function setId(?int $id): void
        {
            $this->id = $id;
        }

        public function setLibelle(string $libelle): void
        {
            $this->libelle = $libelle;
        }

        public function getId(): ?int
        {
            return $this->id;
        }

        public function getLibelle(): string
        {
            return $this->libelle;
        }

        // .. (other code)
    }