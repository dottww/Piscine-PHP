CREATE TABLE IF NOT EXISTS `ft_table`(
   `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
   `login` varchar(8) NOT NULL DEFAULT 'toto',
   `group` enum('staff', 'student', 'other') NOT NULL,
   `creation_date` date NOT NULL
);