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
        $sql = "select * from personne where idpersonne=$ref";
        $res = $this->cnx->query($sql);
        return ($res->fetch(PDO::FETCH_NUM));
    }
    function findAll()
    {
        $sql = "select * from personne";
        $res = $this->cnx->query($sql);
        return ($res->fetchAll(PDO::FETCH_NUM));
    }
    function delete($ref)
    {
        $sql = "delete from inscrit where idpersonne=$ref";
        $res = $this->cnx->exec($sql);
        return ($res);
    }
}
