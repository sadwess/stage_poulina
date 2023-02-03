<?php
class emprunt
{
    private $idemprunt,$dateRetour,$dateEmprunt,$idlivre,$idadherent;
    function __construct($ide, $dr, $de, $idl, $ida)
    {
       
        $this->idemprunt = $ide;
        $this->dateRetour = $dr;
        $this->dateEmprunt = $de;
        $this->idlivre = $idl;
        $this->idadherent=$ida;


    }
   

   
    public function getIdemprunt()
    {
        return $this->idemprunt;
    }

   
    public function setIdemprunt($idemprunt)
    {
        $this->idemprunt = $idemprunt;

    }

    
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;
    }

    
    public function getDateEmprunt()
    {
        return $this->dateEmprunt;
    }

   
    public function setDateEmprunt($dateEmprunt)
    {
        $this->dateEmprunt = $dateEmprunt;
    }

    
    public function getIdlivre()
    {
        return $this->idlivre;
    }

    
    public function setIdlivre($idlivre)
    {
        $this->idlivre = $idlivre;

    }

    
    public function getIdadherent()
    {
        return $this->idadherent;
    }

    
    public function setIdadherent($idadherent)
    {
        $this->idadherent = $idadherent;

    }
}
