<?php

class Compte
{
    private string $_libelle;
    private float $_solde;
    private string $_devise;
    private Client $_client;

    public function __construct(string $libelle, float $solde, string $devise, Client $client)
    {
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_client = $client;
        $client->ajouterCompte($this);
    }

    public function __toString()
    {
        return "Libellé : ".$this->_libelle."<br>".
               "Solde du compte : ".$this->_solde."<br>".
               "Devise utilisée : ".$this->_devise."<br>".
               "Titulaire du compte : "."<br>".$this->_client."<br>";
    }

    public function setRetrait($montantRetrait)
    {
        $this->_solde -= $montantRetrait;
    }

    public function setDepot($montantDepot)
    {
        $this->_solde += $montantDepot;
    }

    public function virement($compteCredite, $montant)
    {
        $this->setDepot($montant);
        $compteCredite->setRetrait($montant);
    }
}

?>