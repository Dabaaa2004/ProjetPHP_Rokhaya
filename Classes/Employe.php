<?php
require_once "Classes/Utilisateur.php";

class Employe extends Utilisateur {
    private $salaire;

    public function __construst($id, $nom, $email, $login, $motDePasse, $salaire) {
        parent::__construct($id, $nom, $email, $login, $motDePasse);
        $this->salaire = $salaire;
    }

    public function calculerSalaireAnnuel() {
        return $this->salaire * 12;
    }

    public function afficherRole() {
        return "Je suis un Employe";
    }

    public function afficher() {
        echo "DEBUG salaire = " . $this->salaire . "<br>";
        echo $this->afficherInfos() . " | Salaire : $this->salaire <br>";
    }
}