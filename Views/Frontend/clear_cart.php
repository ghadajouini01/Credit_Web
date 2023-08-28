<?php
session_start();
    require '../../Controller/PanierC.php';
if (isset($_SESSION['id'])) {
    $panC = new PanierC();
    $panC->SupprimerP($_SESSION['id']);
    
   header('Location:Panier.php');
   echo 'sudd';
} else {
    echo $_SESSION['id'];
}
    
?>