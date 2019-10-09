<?php
    define('USER',"chatenet");
    define('PASSWD',"chatenet");
    define('SERVER',"servinfo-mariadb");
    define('BASE',"DBchatenet");
    function connect_bd(){
        $dsn = "mysql:dbname=".BASE.";host=".SERVER;
            try{
                $connexion = new PDO($dsn,USER,PASSWD);
            }
            catch(PDOException $e){
                printf("Échec connexion : %s\n", $e->getMessage());
                exit();
            }
        return $connexion;}
?>