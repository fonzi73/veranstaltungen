<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VeranstaltungHTML
 *
 * @author fonzi
 */
class VeranstaltungHTML {

    public static function buildTableContent($veranstaltung) {
        $html = "
        <thead>
        <tr>
            <th>Veranstaltung</th>
            <th>Datum</th>
            <th>Uhrzeit</th>
            <th>Ort</th>
            <th>Beschreibung</th>
            <th>Genre</th>
            <th>Preis</th>
        </tr>
    </thead>
    <tbody>";

        for ($i = 0; $i < count($veranstaltung); $i++) {
            $html .= "
            <tr>           
                <td>{$veranstaltung[$i]->getNameva()}</td>
                <td>{$veranstaltung[$i]->getDatum()}</td>
                <td>{$veranstaltung[$i]->getUhrzeit()}</td>
                <td>{$veranstaltung[$i]->getOrt()->getNameort()}</td>
                <td>{$veranstaltung[$i]->getBeschreibung()}</td>
                <td>{$veranstaltung[$i]->getGenre()->getTyp()}</td>
                <td>{$veranstaltung[$i]->getPreis()}</td>
            </tr>";
        }

        $html .="</tbody>";
        return $html;
        ;
    }

}
