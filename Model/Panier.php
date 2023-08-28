<?php 
class Panier{

    public $id;
    public $id_user;
    public $id_produit;
    public $qtte;
    public $date;

    public function __construct(int $id,int $id_user,int $id_produit,int $qtte,DateTime $date_ajout)
    {
        $this->id=$id;
        $this->id_user=$id_user;
        $this->id_produit=$id_produit;
        $this->date=$date_ajout;
        $this->qtte=$qtte;
    }

    public function getId() : int 
    {
        return $this->id;
    }
    public function getId_user() : int 
    {
        return $this->id_user;
    }
    public function getId_produit() : int 
    {
        return $this->id_produit;
    }
    public function getDate() : DateTime 
    {
        return $this->date;
    }
    public function getQtte() : int 
    {
        return $this->qtte;
    }

}
