<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<?php
class Database{
    private $serveur="localhost";
    private $port = "5432";
    private $user="postgres";
    private $pwd="Diaoprince30";
    private $dbname="gestion_produits";

    function getConnexion(){
        try {
            $connexion = new PDO("pgsql:host=$this->serveur;dbname=$this->dbname", $this->user, $this->pwd);

            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo '<i class="fas fa-check-circle" style="color: green"></i> Connecté !';
            return $connexion;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
}


