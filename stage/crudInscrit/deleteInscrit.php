<?php
require_once "crud.php";
$crud = new crud();
$ref = $_GET['ref'];
$crud->delete($ref);

