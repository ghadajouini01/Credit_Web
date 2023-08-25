<?php
session_start();
    require '../../Controller/ProduitC.php';
if (isset($_GET['id'])) {
    $prodC = new ProduitC();
    $prodC->SupprimerProduit($_GET['id']);
    
   header('Location:MesProduits.php');
   echo 'sudd';
} else {
    echo 'oooooooooooooooooo';
}
    
?>