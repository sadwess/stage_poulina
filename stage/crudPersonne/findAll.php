<?php
$title = "La liste des appartements";
ob_start();
require_once "crud.php";
$crud = new crud();
$personne = $crud->findAll();
return $personne;
?>


