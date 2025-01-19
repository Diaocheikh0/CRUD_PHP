<?php
// src/Product.php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'products')]
class Product
    {
        #[ORM\Id]
        #[ORM\Column(type: 'integer')]
        #[ORM\GeneratedValue]
        private int|null $id = null;
        #[ORM\Column(type: 'string')]
        private string $libelle;

        #[ORM\Column(type: 'integer')]
        private string $pu;

        #[ORM\Column(type: 'float')]
        private string $qt;

        /** Many products have one category. This is the owning side. */
        #[ORM\ManyToOne(targetEntity: Categorie::class)]
        #[ORM\JoinColumn(name: 'categorie_id', referencedColumnName: 'id', nullable: false)]
        private Categorie|null $categorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function getPu(): string
    {
        return $this->pu;
    }

    public function getQt(): string
    {
        return $this->qt;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }

    public function setPu(string $pu): void
    {
        $this->pu = $pu;
    }

    public function setQt(string $qt): void
    {
        $this->qt = $qt;
    }

    public function setCategorie(?Categorie $categorie): void
    {
        $this->categorie = $categorie;
    }

        // .. (other code)
    }