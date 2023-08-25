<?php
class Produit 
{
    public $id;
    public $categorie;
    public $nom;
    public $description;
    public $date_ajout;
    public $prix;
    public $img;
    public $id_user;

    public function __construct(int $id,int $categorie,string $nom,string $description,DateTime $date_ajout,float $prix,string $img,int $id_user)
    {
        $this->id=$id;
        $this->categorie=$categorie;
        $this->nom=$nom;
        $this->description=$description;
        $this->date_ajout=$date_ajout;
        $this->prix=$prix;
        $this->img=$img;
        $this->id_user=$id_user;
    }

    public function getId() : int
    {
        return $this->id;
    }
    public function setId(int $id)
    {
        $this->id=$id;
    }
    public function getId_user() : int
    {
        return $this->id_user;
    }
    public function setId_user(int $id)
    {
        $this->id_user=$id;
    }
    public function getCategorie() : int
    {
        return $this->categorie;
    }
    public function setCategorie(int $id)
    {
        $this->categorie=$id;
    }
    public function getNom() : string
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom=$nom;
    }
    public function getImg() : string
    {
        return $this->img;
    }
    public function setImg(string $img)
    {
        $this->img=$img;
    }
    public function getDescription() : string
    {
        return $this->description;
    }
    public function setDescription(string $desc)
    {
        $this->description=$desc;
    }
    public function getDate_ajout() : DateTime 
    {
        return $this->date_ajout;
    }
    public function setDate_ajout(DateTime $dd)
    {
        $this->date_ajout=$dd;
    }
    public function getPrix() : float 
    {
        return $this->prix;
    }
    public function setPrix(float $dd)
    {
        $this->prix=$dd;
    }
}