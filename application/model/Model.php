<?php

namespace application\model;

use PDO;
use PDOException;

class Model{

        protected $connection;

        public function __construct(){
                if(!isset($this->connection))
                {
                        global $dbHost, $dbName, $dbUsername, $dbPassword;
                        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];                        
                        try{
                                $this->connection = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUsername, $dbPassword, $options);
                        }
                        catch(PDOException $e){
                                echo 'error ' . $e->getMessage();
                                return false;
                        }
                }
        }

        public function __destruct(){
                $this->closeConnection();
        }

        protected function closeConnection(){
                $this->connection = null;
        }

        protected function query($query, $values = null)
        {
                try{
                        if($values == null){
                                return $this->connection->query($query);
                        }
                        else{
                                $stmt = $this->connection->prepare($query);
                                $stmt->execute($values);
                                $result = $stmt;
                                return $result;
                        }

                }
                catch(PDOException $e){
                        echo 'error ' . $e->getMessage();
                        return false;

                }
        }


        protected function execute($query, $values = null)
        {
                try{
                        if($values == null){
                                return $this->connection->exec($query);
                        }
                        else{
                                $stmt = $this->connection->prepare($query);
                                $stmt->execute($values);
                        }
                        return true;

                }
                catch(PDOException $e){
                        echo 'error ' . $e->getMessage();
                        return false;

                }
        }



}