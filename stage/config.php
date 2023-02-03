<?php
class config
{
    function getConnexion()
    {
        $dsn = "mysql:host=localhost;dbname=biblio";
        $user = "root";
        $pw = "";
        $cnx = new PDO($dsn, $user, $pw);
        return $cnx;
    }
}
