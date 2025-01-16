<?php

abstract class Database
{
    protected $db;

    public function __construct() {
       try {
         $this->db = new PDO("mysql:host=localhost;dbname=appli-cine;charset=utf8", "root", "");
         $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }  catch (PDOException $e) {
        die("Erreur de co : " . $e->getMessage());
    }
    }
    
    public function getDb() {
        return $this->db;
    }
}
