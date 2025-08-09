<?php
// Configuration de la base de données
$host = 'localhost';
$dbname = 'db-test';
$username = 'postgres';
$password = 'admin';

try {
    //  connexion à la base de données PostgreSQL
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    
    // option pour afficher les erreurs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   //echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    //  erreurs de connexion
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
