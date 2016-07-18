<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Genre
 *
 * @author fonzi
 */
class Genre {
    
    private $id;
    private $typ;
    
    public function __construct($typ, $id = NULL) {
        if (!is_null($id)) {
            $this->id = $id;
        }
        $this->typ = $typ;
    }

    public function getId() {
        return $this->id;
    }

    public function getTyp() {
        return $this->typ;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function setTyp($typ) {
        $this->typ = $typ;
    }

    public static function getAll() {
        $db = DbConnect::getConnection();
        $stmt = $db->prepare("SELECT * FROM genre");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $genre = [];
        foreach ($rows as $row) {
            $genre[] = new Genre($row['typ']);
        }
        return $genre;
    }
    
    public static function getGenreById($id) {
        $db = DbConnect::getConnection();
        $stmt = $db->prepare("SELECT * FROM genre WHERE id=?");
        $stmt->bindValue(1, $id, PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $genre = [];
        foreach ($rows as $row) {
            $genre[] = new Genre($row['typ'], $row['id']);
        }
        return $genre[0];
    }
}
