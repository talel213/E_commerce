<?php
require_once "../classes/crud_produit.php";
$crud=new crud_produit();
$id=$_GET['id'];
$res=$crud->delete($id);

if($res)
{
    header('location:All.php');
    exit();}
else
 echo "pb de connexion";

?>