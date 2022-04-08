<?php

class Client
{
    private string $_nom;
    private string $_prenom;
    private $_dateNaissance;
    private string $_ville;
    private array $_comptes;

    public function __construct(string $nom, string $prenom, $dateNaissance, string $ville)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_ville = $ville;
        $this->_comtpes = [];
    }

    public function getAge()
    {
       $ajd = new DateTime();
       $age = $this->_dateNaissance->diff($ajd);
       return $age->y." ans";
    }

    public function ajouterCompte(Compte $libelle)
    {
        $this->_comptes[] = $libelle;
    }

    public function afficherComptes()
    {
        foreach($this->_comptes as $compte){
            echo $compte;
        }
    }

    public function __toString()
    {
        return "Nom : ".$this->_nom."<br>".
               "Prénom : ".$this->_prenom."<br>".
               "Âge : ".$this->getAge()."<br>".
               "Ville : ".$this->_ville."<br><br>";
               // $this->afficherComptes()."<br><br>";
    }

}

?>