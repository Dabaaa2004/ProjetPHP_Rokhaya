<?php
require_once "Personne.php";

abstract class Utilisateur extends Personne implements Authentification, Afficher {

protected $login;
protected $motDePasse;

public static $nombreUtilisateurs = 0;

public function __construct($id, $nom, $email, $login, $motDePasse) {
    parent ::__construct($id, $nom, $email);
    $this->login = $login;
    $this->motDePasse = $motDePasse;
    self::$nombreUtilisateurss++;
}

public function seConnecter() {
    return $this->login . "connecte.";
}

public static function afficherNombre() {
    return "Nombre Utilisateurs : " . self::$nombreUtilisateurs;
}

abstract public function afficherRole();
}