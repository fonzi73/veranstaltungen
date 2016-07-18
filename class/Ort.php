<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ort
 *
 * @author fonzi
 */
class Ort {
    
    private $id;
    private $nameort;
    
    public function __construct($nameort, $id = NULL) {
        if (!is_null($id)) {
            $this->id = $id;
        }
        $this->nameort = $nameort;
    }

    public function getId() {
        return $this->id;
    }

    public function getNameort() {
        return $this->nameort;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNameort($nameort) {
        $this->nameort = $nameort;
    }


    public static function getAll() {
        $db = DbConnect::getConnection();
        $stmt = $db->prepare("SELECT * FROM ort");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $ort = [];
        foreach ($rows as $row) {
            $ort[] = new Ort($row['nameort']);
        }
        return $ort;
    }
    
    public static function getOrtById($id) {
        $db = DbConnect::getConnection();
        $stmt = $db->prepare("SELECT * FROM ort WHERE id=?");
        $stmt->bindValue(1, $id, PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $ort = [];
        foreach ($rows as $row) {
            $ort[] = new Ort($row['nameort'], $row['id']);
        }
        return $ort[0];
    }
    
}
