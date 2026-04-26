<?php
require_once "Classes/Utilisateur.php";

class Client extends Utilisateur {
    private $typeClient;

    const TAUX_SIMPLE = 0.05;
    const TAUX_PREMIUM = 0.15;

    public function __construct($id, $nom, $email, $login, $motDePasse, $typeClient) {
        parent::__construct($id, $nom, $email, $login, $motDePasse);
        $this->typeClient = $typeClient;
    }

    public function calculerReduction($montant) {
        if ($this->typeClient == "premium") {
            return $montant * self::TAUX_PREMIUM;
        } else {
            return $montant * self::TAUX_SIMPLE;
        }
    }

    public function afficherInfos() {
        return parent::afficherInfos() . " | Type : " . $this->typeClient;
    }

    public function afficherRole() {
        return "Je suis un client";
    }

    public function afficher() {
        echo $this->afficherInfos() . "<br>";
    }
}