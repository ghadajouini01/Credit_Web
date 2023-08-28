<?php
include "../../Controller/PanierC.php";
include_once '../../Model/Panier.php';
include "../../Controller/ProduitC.php";
include_once '../../Model/Produit.php';
include '../../Controller/UserC.php';
require_once '../../model/User.php';

session_start();
if(isset($_POST['product-id'])&&isset($_POST['product-quantity']))
{
    $panierC= new PanierC();
    $Now = new DateTime('now', new DateTimeZone('Europe/Paris'));

    $panier = new Panier(1,$_SESSION['id'],$_POST['product-id'],$_POST['product-quantity'],$Now);
    $panierC->AjouterPanier($panier);
    header("Location: produitdetail.php?id={$_POST['product-id']}");
}