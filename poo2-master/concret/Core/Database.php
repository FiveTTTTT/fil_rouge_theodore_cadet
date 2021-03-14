<?php 
namespace Core;

class Database{

    protected $pdo;
    public function __construct()
    {
        try {
            require "Config/config.php";
            $this->host = $dbConfig["host"];
            $this->dbname = $dbConfig["dbname"];
            $this->user = $dbConfig["user"];
            $this->pass = $dbConfig["pass"];

            $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);

        } catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

};