<?php
class adherent
{
    private $idadherent,$dateInscription,$idinscrit;
    function __construct($ida, $di, $idi)
    {
       
        $this->idadherent = $ida;
        $this->dateInscription = $di;
        $this->idinscrit = $idi;


    }
   
    public function getIdadherent()
    {
        return $this->idadherent;
    }

  
    public function setIdadherent($idadherent)
    {
        $this->idadherent = $idadherent;

    }

    
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

    }

   
    public function getIdinscrit()
    {
        return $this->idinscrit;
    }

    
    public function setIdinscrit($idinscrit)
    {
        $this->idinscrit = $idinscrit;

       
    }
}
