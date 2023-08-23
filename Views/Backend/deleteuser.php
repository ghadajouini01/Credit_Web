<?php
session_start();
    require '../../Controller/UserC.php';
if (isset($_GET['id'])) {
    $userC = new UserC();
    $userC->deleteuser($_GET['id']);
    
   header('Location:indexAdmin.php');
   echo 'sudd';
} else {
    echo 'oooooooooooooooooo';
}
    
?>