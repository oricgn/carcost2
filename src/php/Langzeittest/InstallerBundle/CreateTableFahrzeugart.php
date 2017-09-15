<?php
declare(strict_types=1)

/**
CREATE TABLE `fahrzeugart` (
  `art_id` int NOT NULL AUTO_INCREMENT,
  `art_name` varchar(30) NOT NULL,
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='CarCost 2.0: Fahrzeugart';


INSERT INTO `fahrzeugart` (`art_id`, `art_name`) VALUES (NULL, 'PKW');
INSERT INTO `fahrzeugart` (`art_id`, `art_name`) VALUES (NULL, 'Motorrad');
INSERT INTO `fahrzeugart` (`art_id`, `art_name`) VALUES (NULL, 'Wohnmobil');
INSERT INTO `fahrzeugart` (`art_id`, `art_name`) VALUES (NULL, 'LKW');

*/

class CreateTableFahrzeugart
{

    public function Create($dbinstance): void
    {
    }
}
