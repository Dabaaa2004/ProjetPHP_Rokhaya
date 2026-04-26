<?php
require_once "Classes/Personne.php";
require_once "Classes/Authentifiable.php";
require_once "Classes/Affichable.php";

abstract class Utilisateur extends Personne implements Authentifiable, Affichable {

protected $login;
protected $motDePasse;

public static $nombreUtilisateurs = 0;

public function __construct($id, $nom, $email, $login, $motDePasse) {
    parent ::__construct($id, $nom, $email);
    $this->login = $login;
    $this->motDePasse = $motDePasse;
    self::$nombreUtilisateurs++;
}

public function seConnecter() {
    return $this->login . "connecte.";
}

public static function afficherNombre() {
    return "Nombre Utilisateurs : " . self::$nombreUtilisateurs;
}

abstract public function afficherRole();
}