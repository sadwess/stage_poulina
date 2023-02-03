<?php
require_once "../config.php";
abstract class CRUD
{
    protected $cnx;
    function __construct()
    {
        $pdo = new config();
        $this->cnx = $pdo->getConnexion();
    }

    function find($ref)
    {
        $sql = "select * from reservation where idreservation=$ref";
        $res = $this->cnx->query($sql);
        return ($res->fetch(PDO::FETCH_NUM));
    }
    function findAll()
    {
        $sql = "select * from reservation";
        $res = $this->cnx->query($sql);
        return ($res->fetchAll(PDO::FETCH_NUM));
    }
    function delete($ref)
    {
        $sql = "delete from reservation where idreservation=$ref";
        $res = $this->cnx->exec($sql);
        return ($res);
    }
}
