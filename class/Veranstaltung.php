<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Veranstaltung
 *
 * @author fonzi
 */
class Veranstaltung {

    // Attribute
    private $id;
    private $nameva;
    private $ortId;
    private $ort; // Ort Objket...
    private $datum;
    private $uhrzeit;
    private $beschreibung;
    private $preis;
    private $genreId;
    private $genre; // Genre Objekt
    private $css;

    //Konstruktor

    public function __construct($nameva, $ortId, $datum, $uhrzeit, $beschreibung, $genreId, $preis, $id = NULL) {
        if (!is_null($id)) {
            $this->id = $id;
        }
        $this->nameva = $nameva;
        $this->ortId = $ortId;
        $this->datum = implode('-', array_reverse(explode('.', date($datum))));
        $this->uhrzeit = $uhrzeit;
        $this->beschreibung = $beschreibung;
        $this->preis = $preis;
        $this->genreId = $genreId;
    }

    public function getId() {
        return $this->id;
    }

    public function getNameva() {
        return $this->nameva;
    }

    public function getOrtId() {
        return $this->ortId;
    }

    public function getOrt() {
        return $this->ort;
    }

    public function getMySQLDatum() {
        return $this->datum;
    }

    public function getDatum() {
        $datum = implode('.', array_reverse(explode('-', $this->datum)));
        return $datum;
    }

    public function getUhrzeit() {
        return $this->uhrzeit;
    }

    public function getBeschreibung() {
        return $this->beschreibung;
    }

    public function getPreis() {
        return $this->preis;
    }

    public function getGenreId() {
        return $this->genreId;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setOrt($ort) {
        $this->ort = $ort;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }
    
    

    public static function getAll() {
        $db = DbConnect::getConnection();
        $stmt = $db->prepare("SELECT * FROM veranstaltung ORDER BY datum, uhrzeit");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $veranstaltung = [];
        $i = 0;
        foreach ($rows as $row) {
            $veranstaltung[$i] = new Veranstaltung($row['nameva'], $row['ort_id'], $row['datum'], $row['uhrzeit'], $row['beschreibung'], $row['genre_id'], $row['preis']);
            $veranstaltung[$i]->setOrt(Ort::getOrtById($row['ort_id']));
            $veranstaltung[$i]->setGenre(Genre::getGenreById($row['genre_id']));
            $i++;
        }
        return $veranstaltung;
    }

    public static function insert(Veranstaltung $va) {
        $db = DbConnect::getConnection();
    // sql statement mit prepared statements
        $stmt = $db->prepare("INSERT INTO veranstaltung VALUES(NULL, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bindValue(1, $va->getNameva(), PDO::PARAM_STR);
        $stmt->bindValue(2, $va->getOrtId(), PDO::PARAM_INT);
        $stmt->bindValue(3, $va->getMySQLDatum(), PDO::PARAM_STR);
        $stmt->bindValue(4, $va->getUhrzeit(), PDO::PARAM_STR);
        $stmt->bindValue(5, $va->getBeschreibung(), PDO::PARAM_STR);
        $stmt->bindValue(6, $va->getGenreId(), PDO::PARAM_INT);
        $stmt->bindValue(7, $va->getPreis(), PDO::PARAM_STR);

        $stmt->execute();
    }

    public static function getByLikeness($suchstring) {
        $db = DbConnect::getConnection();
    // $suchstring enthält den zu suchenden Teilstring
    // sql statement mit prepared statements
        $stmt = $db->prepare("SELECT * FROM veranstaltung WHERE nameva LIKE ? ORDER BY datum ASC");
        $stmt->bindValue(1, "%$suchstring%", PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $veranstaltung = [];
        $i = 0;
        foreach ($rows as $row) {
            $veranstaltung[$i] = new Veranstaltung($row['nameva'], $row['ort_id'], 
                    $row['datum'], $row['uhrzeit'], $row['beschreibung'], 
                    $row['genre_id'], $row['preis']);
            $veranstaltung[$i]->setOrt(Ort::getOrtById($row['ort_id']));
            $veranstaltung[$i]->setGenre(Genre::getGenreById($row['genre_id']));
            $i++;
        }
        return $veranstaltung;
    }

    public static function getByOrtId($suchstring) {
        $db = DbConnect::getConnection();
    // $suchstring enthält den zu suchenden Teilstring
    // sql statement mit prepared statements
        $stmt = $db->prepare("SELECT * FROM veranstaltung WHERE ort_id= ? ORDER BY datum ASC");
        $stmt->bindValue(1, "$suchstring", PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $veranstaltung = [];
        $i = 0;
        foreach ($rows as $row) {
            $veranstaltung[$i] = new Veranstaltung($row['nameva'], $row['ort_id'], $row['datum'], $row['uhrzeit'], $row['beschreibung'], $row['genre_id'], $row['preis']);
            $veranstaltung[$i]->setOrt(Ort::getOrtById($row['ort_id']));
            $veranstaltung[$i]->setGenre(Genre::getGenreById($row['genre_id']));
            $i++;
        }
        return $veranstaltung;
    }

}
