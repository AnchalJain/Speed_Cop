CREATE TABLE IF NOT EXISTS `analysis` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Registation_No` varchar(255) NOT NULL,
  `Speed` int(50)  NOT NULL,
  `Speed Limit` varchar(50) CHARACTER SET latin1 NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8;
  INSERT INTO `analysis` (`id`, `Registation_No`, `Speed`, `Speed Limit`) VALUES
  (1, "KZ66ZYT", '40', 'Under speed limit'),
  (2, 'TN37CS2765', '50', 'Under speed limit'),
  (3, 'MH12DE1433', '55', 'Under speed limit'),
  (4, 'HZ13WDD', '55', 'Under speed limit'),
  (5, 'MH12DE12344', '65', 'Over Speed Limit'),
  (6, 'TN99F2378', '55', 'Under Speed Limit'),
  (7, 'MH01AE8017', '55', 'Under Speed Limit'),
  (8, 'MH01AE4057', '70', 'Over Speed Limit'),
  (9, 'MH01BE2056', '55', 'Under Speed Limit'),
  (10, 'MH01AE4567', '45', 'Under Speed Limit'),
  (11, 'UKPL8TE', '55', 'Under Speed Limit'),
  (12, 'MH012DE1433', '70', 'Over Speed Limit');
