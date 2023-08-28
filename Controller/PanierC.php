<?php

require_once '..\..\config.php';
require_once '..\..\Model\Panier.php';


    Class PanierC {


        
        function AfficherPanier()
        {
            $requete = "select * from panier";
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

        

        function getOneById($id)
    {
        $requete = "select * from panier where id =:id";
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

       

        function AjouterPanier($panier)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO panier
                (id_user,id_produit,qtte,date)
                VALUES
                (:id_user,:id_produit,:qtte,:date)
                ');
                $querry->execute([
                    'id_user'=>$panier->getId_user(),
                    'id_produit'=>$panier->getId_produit(),
                    'date'=>$panier->getDate()->format('Y-m-d H:i:s'),
                    'qtte'=>$panier->getQtte()
                    
                    
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        
        



        function Supprimer($id)
        {
            $sql="DELETE FROM panier WHERE id= :id";
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
        function SupprimerP($id)
        {
            $sql="DELETE FROM panier WHERE id_user= :id";
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
