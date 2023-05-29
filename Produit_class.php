<?php require_once('bin/_header.php');
require_once('bin/function.php');


class produit // Création de la class produit
{
    private string $Nom;
    private string $Description;
    private float $Prix;
    private int $Stock;
    // private string $Categorie;

public function add_produit($produit)
    {
        $this->Nom = $produit['Nom'];
        $this->Description = $produit['Description'];
        $this->Prix = $produit['Prix'];
        $this->Stock = $produit['Stock'];
        // $this->Categorie = $produit['Categorie'];
    }

    public function getName(): string //Prendre et set le nom
    {
        return $this->Nom;
    }

    public function setName(string $Nom): void
    {
        $this->Nom = $Nom;
    } 

    public function getDescription(): string //Prendre et set la description du produit 
    {
        return $this->Description;
    }

    public function setDescription(string $Description): void
    {
        $this->Description = $Description;
    } 

    public function getPrix(): float //Prendre et set la description du produit 
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): void
    {
        $this->Prix = $Prix;
    } 

    public function getStock(): int //Prendre et set la description du produit 
    {
        return $this->Prix;
    }

    public function setStock(int $Stock): void
    {
        $this->Stock = $Stock;
    }

}