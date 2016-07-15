/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  fonzi
 * Created: 15.07.2016
 */

CREATE TABLE `ort` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`nameort` varchar(250) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `genre` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`typ` varchar(250) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `veranstaltung` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`nameva` varchar(250) DEFAULT NULL,
`ort_id` int(11) NOT NULL,
`datum` DATE,
`uhrzeit` TIME,
`beschreibung` varchar(1024) DEFAULT NULL,
`genre_id` int(11) NOT NULL,
`preis` varchar(20) DEFAULT NULL,
PRIMARY KEY (`id`),
FOREIGN KEY (`ort_id`) REFERENCES `ort` (`id`),
FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


