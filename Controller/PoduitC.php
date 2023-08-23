<?php

require_once '..\..\config.php';
require_once '..\..\Model\Produit.php';


    Class ProduitC {

        function AfficherProduit()
        {
            $requete = "select * from produit";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                //$result = $querry->fetchAll(PDO::FETCH_COLUMN, 1);
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function AfficherParCateg($idc)
        {
            $requete = "select * from produit where categorie=:categ";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(['categ'=>$idc]);
                //$result = $querry->fetchAll(PDO::FETCH_COLUMN, 1);
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function getProduitById($id)
        {
            $requete = "select * from produit where id=:id";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id'=>$id
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function getProduitByNom($title){
            $req = "select * from produit where nom = :nom";
            $config = config::getConnexion();
            try{
                $query = $config->prepare($req);
                $query->execute(['nom'=>$title]);
                $result = $query->fetch();
                return $result;
            } catch(PDOException $th){
                $th->getMessage();
            }
        }

        function AjouterProduit($produit)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO produit
                (categorie,nom,description,date_ajout,prix,img,id_user)
                VALUES
                (:categorie,:nom,:description,:date_ajout,:prix,:img,:id_user)
                ');
                $querry->execute([
                    'categorie'=>$produit->getCategorie(),
                    'nom'=>$produit->getNom(),
                    'description'=>$produit->getDescription(),
                    'date_ajout'=>$film->getDate_ajout()->format('Y-m-d H:i:s'),
                    'prix'=>$produit->getPrix(),
                    'img'=>$produit->getImg(),
                    'id_user'=>$produit->getId_user(),
                    'prix'=>$film->getPrix()
                   
                    
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        
        function ModifierProduit($produit)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE produit SET
                categorie=:categorie,nom=:nom,description=:description,date_ajout=:date_ajout,prix=:prix,img=:img,id_user=:id_user
                where id=:id');
                
                $querry->execute([
                    'id'=>$film->getid(),
                    'categorie'=>$produit->getCategorie(),
                    'nom'=>$produit->getNom(),
                    'description'=>$produit->getDescription(),
                    'date_ajout'=>$film->getDate_ajout()->format('Y-m-d H:i:s'),
                    'prix'=>$produit->getPrix(),
                    'img'=>$produit->getImg(),
                    'id_user'=>$produit->getId_user(),
                    'prix'=>$film->getPrix()

                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }



        function SupprimerProduit($id)
        {
            $sql="DELETE FROM produit WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
        }

       

        
    }
