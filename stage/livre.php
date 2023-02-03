<?php
class livre
{
    protected $idlivre, $titre,
        $isbn, $auteur, $dateEdition, $categorie;

    function __construct($idl, $t, $i, $a, $de, $c)
    {
        $this->idlivre = $idl;
        $this->titre = $t;
        $this->isbn = $i;
        $this->auteur = $a;
        $this->dateEdition = $de;
        $this->categorie = $c;
    }

    
    public function getIdlivre()
    {
        return $this->idlivre;
    }

    public function setIdlivre($idl)
    {
        $this->idlivre = $idl;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    
    public function setTtitre($titre)
    {
        $this->titre = $titre;
    }

   
    public function getIsbn()
    {
        return $this->isbn;
    }

    
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        
    }

   
    public function getAuteur()
    {
        return $this->auteur;
    }

    
    public function setAuteur($auteur)
    {
        $this->auteur= $auteur;
    }

    
    public function getDateEdition()
    {
        return $this->dateEdition;
    }

    
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;

       
    }

    
    public function getCategorie()
    {
        return $this->categorie;
    }

    
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

    }
}
