<?php
class Categorie 
{

    public $id;
    public $nom;
    public $description;
    public $date_ajout;
    public $img;

    public function __construct(int $id,string $nom,string $description,DateTime $date_ajout,string $img)
    {
        $this->id=$id;
        $this->nom = $nom ;
        $this->description= $description;
        $this->date_ajout =$date_ajout;
        $this->img=$img;
    }

    public function getId() : int 
    {
        return $this->id;
    }
    public function setId(int $id):void
    {
        $this->id=$id;
    }
    public function getNom() : string
    {
        return $this->nom;
    }
    public function setNom(string $nom):void
    {
        $this->nom=$nom;
    }
    public function getImg() : string
    {
        return $this->img;
    }
    public function setImg(string $img):void
    {
        $this->img=$img;
    }
    public function getDescription() :string 
    {
        return $this->description;
    }
    public function setDescription(string $desc):void
    {
        $this->desc=$desc;
    }
    public function getDate_ajout() : DateTime
    {
        return $this->date_ajout;
    }
    public function setDateAjout(DateTime $date_ajout): void
    {
        $this->date_ajout=$date_ajout;
    }
}