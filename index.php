<?php
require_once "Classes/Client.php";
require_once "Classes/Employe.php";
require_once "Classes/Administration.php";
require_once "Classes/Utilisateur.php";
require_once "Classes/personne.php";
require_once "Classes/Authentifiable.php";
require_once "Classes/Affichable.php";


function afficherUtilisateur(Affichable $u) {
    $u->afficher();
}

$client = new Client(1, "Cheikh", "cheikh12@gmail.com", "cheikh123", "1234", "premium");
$employe = new Employe(2, "Daouda", "daouda12@gmail.com", "daouda23", "5678", 45000);
$admin = new Administrateur(3, "Rokhaya", "rokhaya24@gmail.com", "admin", "root");

echo "<h2>Tests :</h2>";

$client->afficher();
echo $client->seConnecter() . "<br>";
echo "Reduction : " . $client->calculerReduction(1000) . "<br><br>";

$employe->afficher();
echo "Salaire annuel : " . $employe->calculerSalaireAnnuel() . "<br><br>";

$admin->afficher();
echo $admin->SupprimerUtilisateur() . "<br><br>";

echo "<h2>Polymorphisme :</h2>";
afficherUtilisateur($client);
afficherUtilisateur($employe);
afficherUtilisateur($admin);

echo "<br><br>";
echo Utilisateur::afficherNombre();