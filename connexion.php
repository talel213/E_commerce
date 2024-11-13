<?php
class connexion
{
    private $pdo;
    function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=e_commerce";
        $user = "root";
        $pw = "";
        $this->pdo = new PDO($dsn, $user, $pw);
    }
    function getConnexion(){
        return $this->pdo;
    }
}
?>

