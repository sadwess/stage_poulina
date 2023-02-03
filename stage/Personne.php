<?php
class Personne
{
    protected $idpersonne, $cin, $prenom, $nom, $mail, $tel;

    function __construct($idp, $c, $p, $n, $m, $t)
    {
        $this->idpersonne = $idp;
        $this->cin = $c;
        $this->prenom = $p;
        $this->nom = $n;
        $this->mail = $m;
        $this->tel = $t;
    }

    
    

  
    public function getIdpersonne()
    {
        return $this->idpersonne;
    }

   
    public function setIdpersonne($idpersonne)
    {
        $this->idpersonne = $idpersonne;

       
    }

   
    public function getCin()
    {
        return $this->cin;
    }

   
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

   
    public function getPrenom()
    {
        return $this->prenom;
    }

   
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    
    public function getNom()
    {
        return $this->nom;
    }

    
    public function setNom($nom)
    {
        $this->nom = $nom;

    }

    
    public function getMail()
    {
        return $this->mail;
    }

    
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    
    public function getTel()
    {
        return $this->tel;
    }

    
    public function setTel($tel)
    {
        $this->tel = $tel;

    }
}
