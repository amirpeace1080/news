<?php
namespace application\model;

use PDO ;
use PDOException;

class Model {
    protected $connection;
    public function __construct() {
        if(!isset($connection)){
            global $dbHost, $dbName, $dbUserName, $dbPassword;
            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC];
            try{
                $this->connection = new PDO('mysql:host = ' . $dbHost . ';dbName =' . $dbName , $dbUserName, $dbPassword, $option);
            }
            catch(PDOException $ex){
                echo 'there is some problem' . $ex->getMessage();
            }
        }
    }

    public function __destruct(){
        $this->closeConnection();
    }

    protected function query($query, $values = null)
    {
        try{
            if($values == null){
                return $this->connection->query($query);
            }else{
                $stmt = $this->connection->prepare($query);
                $stmt->execute($values);
                $result = $stmt;
                return $result;
            }
        }
        catch(PDOException $ex) {
            echo 'there is some problem' . $ex->getMessage();
            return false;
        }
    }

    protected function execute($query, $values = null) {
        try{
            if($values == null)
            {
                $this->connection->exec($query);
            }else{
                $stmt = $this->connection->prepare($query);
                $stmt->execute($values);                                
            }
            return true;
        }
        catch(PDOException $ex) {
            echo 'there is some problem' . $ex->getMessage();
            return false;
        }
    }

    protected function closeConnection() {
        $this->connection = null;
    }
}

?>