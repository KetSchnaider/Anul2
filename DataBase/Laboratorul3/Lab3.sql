-- -------------------------------------------------------------
-- TablePlus 5.6.6(520)
--
-- https://tableplus.com/
--
-- Database: Lab3
-- Generation Time: 2023-11-29 17:14:38.0870
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `characteristics` (
  `characteristics_id` int NOT NULL AUTO_INCREMENT,
  `characteristics_for_main_character` varchar(255) NOT NULL,
  `characteristics_for_second_character` varchar(255) NOT NULL,
  `scenario_id` int DEFAULT NULL,
  PRIMARY KEY (`characteristics_id`),
  KEY `scenario_id` (`scenario_id`),
  CONSTRAINT `characteristics_ibfk_1` FOREIGN KEY (`scenario_id`) REFERENCES `scenario` (`scenario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;;

CREATE TABLE `characters` (
  `character_id` int NOT NULL AUTO_INCREMENT,
  `main_character` varchar(255) NOT NULL,
  `second_character` varchar(255) NOT NULL,
  `negative_main_character` varchar(255) NOT NULL,
  `negative_second_character` varchar(255) NOT NULL,
  `scenario_id` int DEFAULT NULL,
  PRIMARY KEY (`character_id`),
  KEY `scenario_id` (`scenario_id`),
  CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`scenario_id`) REFERENCES `scenario` (`scenario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;;

CREATE TABLE `circumstance` (
  `circumstance_id` int NOT NULL AUTO_INCREMENT,
  `circumstance` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `scenario_id` int DEFAULT NULL,
  PRIMARY KEY (`circumstance_id`),
  KEY `scenario_id` (`scenario_id`),
  CONSTRAINT `circumstance_ibfk_1` FOREIGN KEY (`scenario_id`) REFERENCES `scenario` (`scenario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;;

CREATE TABLE `clothes` (
  `clothes_id` int NOT NULL AUTO_INCREMENT,
  `clothes_for_main_character` varchar(255) NOT NULL,
  `scenario_id` int DEFAULT NULL,
  PRIMARY KEY (`clothes_id`),
  KEY `scenario_id` (`scenario_id`),
  CONSTRAINT `clothes_ibfk_1` FOREIGN KEY (`scenario_id`) REFERENCES `scenario` (`scenario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;;

CREATE TABLE `scenario` (
  `scenario_id` int NOT NULL AUTO_INCREMENT,
  `scenario_name` varchar(255) NOT NULL,
  PRIMARY KEY (`scenario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;;

CREATE TABLE `transport` (
  `transport_id` int NOT NULL AUTO_INCREMENT,
  `transport_type` varchar(255) NOT NULL,
  `scenario_id` int DEFAULT NULL,
  PRIMARY KEY (`transport_id`),
  KEY `scenario_id` (`scenario_id`),
  CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`scenario_id`) REFERENCES `scenario` (`scenario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;;

INSERT INTO `characteristics` (`characteristics_id`, `characteristics_for_main_character`, `characteristics_for_second_character`, `scenario_id`) VALUES
(1, 'Tanara', 'Vesela', 1),
(2, 'Neobisnuita', 'Optimism', 2),
(3, 'Stralucitor', 'Misterios', 3);

INSERT INTO `characters` (`character_id`, `main_character`, `second_character`, `negative_main_character`, `negative_second_character`, `scenario_id`) VALUES
(1, 'Zana Primaverii', 'Floarea', 'Intunericul', 'Inghetul', 1),
(2, 'Studentul', 'Lectorul', 'Decanatul', 'Sesiunea', 2),
(3, 'Privigihtoarea', 'Bufnita', 'T-Rex', 'Ghepardul', 3);

INSERT INTO `circumstance` (`circumstance_id`, `circumstance`, `season`, `scenario_id`) VALUES
(1, 'Padurea Fermecata', 'Vara', 1),
(2, 'Raul Mandrei', 'Iarna', 2),
(3, 'Muntii Inaltimilor', 'Primavara', 3);

INSERT INTO `clothes` (`clothes_id`, `clothes_for_main_character`, `scenario_id`) VALUES
(1, 'Camasa', 1),
(2, 'Pantaloni', 2),
(3, 'Vesta', 3);

INSERT INTO `scenario` (`scenario_id`, `scenario_name`) VALUES
(1, 'Zana Verii & Floarea'),
(2, 'Scenario 2'),
(3, 'Scenario 3');

INSERT INTO `transport` (`transport_id`, `transport_type`, `scenario_id`) VALUES
(1, 'Avion', 1),
(2, 'Corabie', 2),
(3, 'Taxi', 3);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;