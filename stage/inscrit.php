<?php
class inscrit
{
    protected $idinscrit, $codeInscrit, $dateInscrit, $fraisInscrit, $idpersonne, $idadherent;

    function __construct($idi, $ci, $di, $fi, $idp, $ida)
    {
        $this->idinscrit = $idi;
        $this->codeInscrit = $ci;
        $this->dateInscrit = $di;
        $this->fraisInscrit = $fi;
        $this->idpersonne = $idp;
        $this->idadherent = $ida;
    }

    
    

  
   

    
    public function getIdinscrit()
    {
        return $this->idinscrit;
    }

   
    public function setIdinscrit($idinscrit)
    {
        $this->idinscrit = $idinscrit;


    }

    
    public function getCodeInscrit()
    {
        return $this->codeInscrit;
    }

    
    public function setCodeInscrit($codeInscrit)
    {
        $this->codeInscrit = $codeInscrit;

    
    }

    
    public function getDateInscrit()
    {
        return $this->dateInscrit;
    }

    
    public function setDateInscrit($dateInscrit)
    {
        $this->dateInscrit = $dateInscrit;

        return $this;
    }

   
    public function getFraisInscrit()
    {
        return $this->fraisInscrit;
    }

    
    public function setFraisInscrit($fraisInscrit)
    {
        $this->fraisInscrit = $fraisInscrit;
    }

    public function getIdpersonne()
    {
        return $this->idpersonne;
    }

    
    public function setIdpersonne($idpersonne)
    {
        $this->idpersonne = $idpersonne;

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
