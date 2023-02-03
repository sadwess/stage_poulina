<?php
require_once "crud.php";
$crud = new crud();
$inscrit = $crud->findAll();
return $inscrit;
?>


