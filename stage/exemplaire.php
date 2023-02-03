<?php
require_once "livre.php";
class exemplaire extends livre
{
    private $disponibilite,$idemprunt,$discriminator,$nombreExemplaire;
    function __construct($idl, $t, $i, $a, $de, $c, $d,$ide,$dis,$ne)
    {
        parent::__construct($idl, $t, $i, $a, $de, $c);
        $this->disponibilite = $d;
        $this->idemprunt = $ide;
        $this->discriminator = $dis;
        $this->nombreExemplaire = $ne;


    }
   
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;
    }

    
    public function getIdEmprunt()
    {
        return $this->idemprunt;
    }

    
    public function setIdEmprunt($idemprunt)
    {
        $this->idemprunt = $idemprunt;

        return $this;
    }

    public function getDiscriminator()
    {
        return $this->discriminator;
    }

    
    public function setDiscriminator($discriminator)
    {
        $this->discriminator = $discriminator;
    }

    public function getNombreExemplaire()
    {
        return $this->nombreExemplaire;
    }


    public function setNombreExemplaire($nombreExemplaire)
    {
        $this->nombreExemplaire = $nombreExemplaire;
    }
}
