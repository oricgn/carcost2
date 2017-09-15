<?php
declare(strict_types=1)

/**
CREATE TABLE `marke` (
  `mrk_id` int NOT NULL AUTO_INCREMENT,
  `mrk_art_id` int NOT NULL,
  `mrk_kurzname` varchar(30) NOT NULL,
  `mrk_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mrk_id`),
  INDEX mrk_art_id_i (mrk_art_id),
  FOREIGN KEY (mrk_art_id)
    REFERENCES fahrzeugart(art_id)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='CarCost 2.0: Marke';


INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Alfa Romeo', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Alpina', 'Alpina Burkard Bovensiepen');
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Audi', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'BMW', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Chrysler', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Citroën', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Dacia', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Daihatsu', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Fiat', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Ford', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Honda', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Hyundai', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Kia', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Lancia', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Land Rover', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Lexus', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Mazda', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Mercedes-Benz', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Mini', 'Mini (BMW Group)');
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Mitsubishi', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Nissan', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Opel', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Peugeot', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Porsche', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Renault', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Saab', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Seat', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Skoda', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Smart', '(ehemals Micro Compact Car)');
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Subaru', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Suzuki', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Toyota', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Volkswagen', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 1, 'Volvo', NULL);

INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 2, 'Daelim', ' Daelim Motor Company');
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 2, 'Kawasaki', NULL);
INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 2, 'Yamaha', NULL);

INSERT INTO `marke` (`mrk_id`, `mrk_art_id`, `mrk_kurzname`, `mrk_name`) VALUES (NULL, 3, 'Fiat', NULL);

*/