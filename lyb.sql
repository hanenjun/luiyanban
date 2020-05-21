CREATE TABLE `lyb` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` char(100) COLLATE utf8mb4_bin NOT NULL,
  `author` char(100) COLLATE utf8mb4_bin NOT NULL,
  `createtime` datetime DEFAULT CURRENT_TIMESTAMP,
  `content` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin