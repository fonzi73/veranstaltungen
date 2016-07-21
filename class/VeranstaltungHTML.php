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
            <th><a>Veranstaltung</a></th>
            <th><a>Datum</a></th>
            <th><a>Uhrzeit</a></th>
            <th><a>Ort</a></th>
            <th width=\"20%\"><a>Beschreibung</a></th>
            <th><a>Genre</a></th>
            <th><a>Preis</a></th>
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
                <td width=\"35%\">{$veranstaltung[$i]->getBeschreibung()}</td>
                <td>{$veranstaltung[$i]->getGenre()->getTyp()}</td>
                <td>{$veranstaltung[$i]->getPreis()}</td>
            </tr>";
        }

        $html .="</tbody>";
        return $html;
        ;
    }

}
