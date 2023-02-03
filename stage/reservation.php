<?php
class inscrit
{
    protected $idreservation, $idlivre;

    function __construct($idr, $idl)
    {
        $this->idreservation = $idr;
        $this->idlivre = $idl;
        
    }
    
    public function getIdreservation()
    {
        return $this->idreservation;
    }
    public function setIdreservation($idreservation)
    {
        $this->idreservation = $idreservation;
    }

  
    public function getIdlivre()
    {
        return $this->idlivre;
    }

    
    public function setIdlivre($idlivre)
    {
        $this->idlivre = $idlivre;
    }
}
