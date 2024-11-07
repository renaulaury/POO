<?php

class Employe {
    private string $nom;
    private string $prenom;
    private string $email;    
    private array $contrats;

    public function __construct(string $nom, string $prenom, string $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;    
        
        $this->contrats = [];    
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
        return $this;
    }

    public function getcontrats(): array {
        return $this->contrats;
    }   
    
    public function setcontrats(array $contrats) {
        $this->contrats = $contrats;
    return $this;
    } 

    public function addContrat(Contrat $contrat) {
        $this->contrats[] = $contrat;
    }
       
    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
}
?>