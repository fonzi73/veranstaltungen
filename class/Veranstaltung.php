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
    private $datum;
    private $uhrzeit;
    private $beschreibung;
    private $preis;
    private $genreId;


    //Konstruktor
    public function __construct($nameva, $ortId, $datum, $uhrzeit, $beschreibung, $preis, $genreId, $id = NULL) {
        $this->id = $id;
        $this->nameva = $nameva;
        $this->ortId = $ortId;
        $this->datum = $datum;
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

    public function getDatum() {
        return $this->datum;
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

    public static function getAll() {
        $db = DbConnect::getConnection();
        $stmt = $db->prepare("SELECT * FROM veranstaltung");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $veranstaltung = [];
        foreach ($rows as $row) {
            $veranstaltung[] = new Veranstaltung($row['nameva'], $row['ort_id'], $row['datum'], $row['uhrzeit'], $row['beschreibung'], $row['genre_id'], $row['preis']);
        }
        return $kneipen;
    }

}
