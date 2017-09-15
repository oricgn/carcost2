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
