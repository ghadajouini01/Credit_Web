<?php
session_start();
    require '../../Controller/PanierC.php';
if (isset($_GET['id'])) {
    $panC = new PanierC();
    $panC->Supprimer($_GET['id']);
    
   header('Location:Panier.php');
   echo 'sudd';
} else {
    echo 'oooooooooooooooooo';
}
    
?>