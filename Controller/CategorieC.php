<?php

require_once '..\..\config.php';
require_once '..\..\Model\Categorie.php';


    Class CategorieC {


        
        function AfficherCategorie()
        {
            $requete = "select nom from categorie";
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

        function AfficherttCategorie()
        {
            $requete = "select * from categorie";
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

        

       

        function AjouterCategorie($categ)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO categorie
                (nom,description,date_ajout)
                VALUES
                (:nom,:description,:date_ajout)
                ');
                $querry->execute([
                    'nom'=>$categ->getNom(),
                    'description'=>$categ->getDescription(),
                    'date_ajout'=>$categ->getDate_ajout()->format('Y-m-d H:i:s')
                    
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        
        



        function SupprimerCatgorie($id)
        {
            $sql="DELETE FROM categorie WHERE id= :id";
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
