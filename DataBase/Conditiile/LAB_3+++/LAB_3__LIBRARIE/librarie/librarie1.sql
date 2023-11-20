-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 16 2017 г., 06:59
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `librarie`
--

-- --------------------------------------------------------

--
-- Структура таблицы `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nume_autor` varchar(25) DEFAULT NULL,
  `idcarte` char(15) DEFAULT NULL,
  PRIMARY KEY (`id_autor`),
  KEY `idcarte` (`idcarte`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `autor`
--

INSERT INTO `autor` (`id_autor`, `nume_autor`, `idcarte`) VALUES
(1, 'Diuma', '2-2222-2222-1'),
(2, 'Petru', '2-2222-2222-4');

-- --------------------------------------------------------

--
-- Структура таблицы `carti`
--

CREATE TABLE IF NOT EXISTS `carti` (
  `idcarte` char(15) NOT NULL,
  `autor` varchar(32) DEFAULT NULL,
  `titlu` varchar(52) DEFAULT NULL,
  `pret` float(8,2) DEFAULT NULL,
  `cantitatea` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`idcarte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carti`
--

INSERT INTO `carti` (`idcarte`, `autor`, `titlu`, `pret`, `cantitatea`) VALUES
('2-2222-222-10', 'Petru', 'Laborator Mysql-Php', 900.00, 10),
('2-2222-222-11', 'Diuma', 'Php Interesant', 345.00, 14),
('2-2222-2222-1', 'Diuma', 'Cei trei muschetari Php', 775.00, 10),
('2-2222-2222-2', 'Diuma', 'Cei trei muschetari Php', 775.00, 10),
('2-2222-2222-3', 'Diuma', 'Cei trei muschetari Php', 775.00, 10),
('2-2222-2222-4', 'Petru', 'Cei trei muschetari Php', 155.00, 20),
('2-2222-2222-5', 'Ion', 'Cei trei muschetari Php', 310.00, 5),
('2-2222-2222-6', 'Vica', 'Cei trei muschetari Php', 930.00, 40),
('2-2222-2222-7', 'Sandu', 'Cei trei muschetari Php', 465.00, 20),
('2-2222-2222-8', 'Eminescu', 'Ghid Php', 1000.00, 3),
('2-2222-2222-9', 'Eminescu', 'Ghid Php', 1000.00, 3);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `autor`
--
ALTER TABLE `autor`
  ADD CONSTRAINT `autor_ibfk_1` FOREIGN KEY (`idcarte`) REFERENCES `carti` (`idcarte`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
