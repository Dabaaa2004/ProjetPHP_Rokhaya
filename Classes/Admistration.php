<?php
require_once "Utilisateur.php";

class Administrateur extends Utilisateur {
    public function supprimerUtilisateur() {
        return "Utilisateur supprimer.";
    }


    public function AfficherRole() {
    return "Je suis un administrateur";
    }

    public function afficher() {
    echo $this->afficherInfos() . "<br>";
    }
}