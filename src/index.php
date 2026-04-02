<?php
$dsn = "mysql:host=db;dbname=demo;charset=utf8mb4";
$user = "demo";
$pass = "demo";

try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "<h1>✅ Connexion réussie à MySQL depuis PHP !</h1>";
    foreach ($pdo->query("SELECT NOW() AS now") as $row) {
        echo "<p>Heure serveur MySQL : {$row['now']}</p>";
    }
} catch (PDOException $e) {
    echo "<h1>❌ Erreur PDO :</h1><pre>" . $e->getMessage() . "</pre>";
}

    
phpinfo();