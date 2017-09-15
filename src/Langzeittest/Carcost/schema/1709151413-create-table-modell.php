CREATE TABLE `modell` (
  `mod_id` int NOT NULL AUTO_INCREMENT,
  `mod_mrk_id` int NOT NULL,
  `mod_name` varchar(255) NOT NULL,
  `mod_karosserieform` varchar(20) DEFAULT NULL,
  `mod_baureihe` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`mod_id`),
  INDEX mod_mrk_id_i (mod_mrk_id),
  FOREIGN KEY (mod_mrk_id)
    REFERENCES modell(mrk_id)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8
  COLLATE=utf8_unicode_ci
  COMMENT='CarCost 2.0: Modell';
