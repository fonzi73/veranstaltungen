<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbConnect
 *
 * @author fonzi
 */
class DbConnect {
    private static $conn;

    public static function getConnection() {
        if (!isset(self::$conn)) {
            try {
                self::$conn = new PDO('mysql:host=' . DB_SERVER . ';dbname=' .
                        DB_NAME . ';charset=utf8', DB_USER, DB_PASSWD);

                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
            } catch (Exception $e) {
                echo $e->getTraceAsString() .'<br>';
                echo '<b><span style="color:#F5022A">Konnte mich mit DB nicht verbinden</b>';
                die();
            }
        }
        return self::$conn;
    }
}
