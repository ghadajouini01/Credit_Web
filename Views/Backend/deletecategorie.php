<?php
session_start();
    require '../../Controller/CategorieC.php';
if (isset($_GET['id'])) {
    $CategC = new CategorieC();
    $CategC->SupprimerCatgorie($_GET['id']);
    
   header('Location:indexCategorie.php');
   echo 'sudd';
} else {
    echo 'oooooooooooooooooo';
}
    
?>