-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 15 2024 г., 01:38
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ecology_statistics`
--

-- --------------------------------------------------------

--
-- Структура таблицы `air_statistics`
--

CREATE TABLE `air_statistics` (
  `air_id` int(11) NOT NULL,
  `year_id` int(11) DEFAULT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `substance_name` varchar(255) DEFAULT NULL,
  `data` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `air_statistics`
--

INSERT INTO `air_statistics` (`air_id`, `year_id`, `zone_id`, `category_name`, `substance_name`, `data`) VALUES
(1, 1, 1, 'Agenti economici', 'Dioxid de sulf', 33),
(2, 1, 2, 'Agenti economici', 'Dioxid de sulf', 51),
(3, 1, 3, 'Agenti economici', 'Dioxid de sulf', 1),
(4, 1, 4, 'Agenti economici', 'Dioxid de sulf', 10),
(5, 1, 5, 'Agenti economici', 'Dioxid de sulf', 31),
(6, 1, 6, 'Agenti economici', 'Dioxid de sulf', 4),
(7, 1, 7, 'Agenti economici', 'Dioxid de sulf', 83),
(8, 1, 8, 'Agenti economici', 'Dioxid de sulf', 3),
(9, 1, 9, 'Agenti economici', 'Dioxid de sulf', 10),
(10, 1, 10, 'Agenti economici', 'Dioxid de sulf', 1),
(11, 1, 11, 'Agenti economici', 'Dioxid de sulf', 6),
(12, 1, 12, 'Agenti economici', 'Dioxid de sulf', 5),
(13, 1, 13, 'Agenti economici', 'Dioxid de sulf', 24),
(14, 1, 14, 'Agenti economici', 'Dioxid de sulf', 2),
(15, 1, 15, 'Agenti economici', 'Dioxid de sulf', 5),
(16, 1, 16, 'Agenti economici', 'Dioxid de sulf', 2),
(17, 1, 17, 'Agenti economici', 'Dioxid de sulf', 0),
(18, 1, 18, 'Agenti economici', 'Dioxid de sulf', 101),
(19, 1, 19, 'Agenti economici', 'Dioxid de sulf', 2),
(20, 1, 20, 'Agenti economici', 'Dioxid de sulf', 1),
(21, 1, 21, 'Agenti economici', 'Dioxid de sulf', 12),
(22, 1, 22, 'Agenti economici', 'Dioxid de sulf', 6),
(23, 1, 23, 'Agenti economici', 'Dioxid de sulf', 32),
(24, 1, 24, 'Agenti economici', 'Dioxid de sulf', 4),
(25, 1, 25, 'Agenti economici', 'Dioxid de sulf', 6),
(26, 1, 26, 'Agenti economici', 'Dioxid de sulf', 12),
(27, 1, 27, 'Agenti economici', 'Dioxid de sulf', 34),
(28, 1, 28, 'Agenti economici', 'Dioxid de sulf', 31),
(29, 1, 29, 'Agenti economici', 'Dioxid de sulf', 6),
(30, 1, 30, 'Agenti economici', 'Dioxid de sulf', 17),
(31, 1, 31, 'Agenti economici', 'Dioxid de sulf', 50),
(32, 1, 32, 'Agenti economici', 'Dioxid de sulf', 101),
(33, 1, 33, 'Agenti economici', 'Dioxid de sulf', 38),
(34, 1, 34, 'Agenti economici', 'Dioxid de sulf', 17),
(35, 1, 35, 'Agenti economici', 'Dioxid de sulf', 10),
(36, 1, 1, 'Agenti economici', 'Oxid de carbon', 1195),
(37, 1, 2, 'Agenti economici', 'oxid de carbon', 244),
(38, 1, 3, 'Agenti economici', 'oxid de carbon', 19),
(39, 1, 4, 'Agenti economici', 'oxid de carbon', 31),
(40, 1, 5, 'Agenti economici', 'oxid de carbon', 53),
(41, 1, 6, 'Agenti economici', 'oxid de carbon', 157),
(42, 1, 7, 'Agenti economici', 'oxid de carbon', 231),
(43, 1, 8, 'Agenti economici', 'oxid de carbon', 38),
(44, 1, 9, 'Agenti economici', 'oxid de carbon', 33),
(45, 1, 10, 'Agenti economici', 'oxid de carbon', 34),
(46, 1, 11, 'Agenti economici', 'oxid de carbon', 42),
(47, 1, 12, 'Agenti economici', 'oxid de carbon', 39),
(48, 1, 13, 'Agenti economici', 'oxid de carbon', 82),
(49, 1, 14, 'Agenti economici', 'oxid de carbon', 122),
(50, 1, 15, 'Agenti economici', 'oxid de carbon', 21),
(51, 1, 16, 'Agenti economici', 'oxid de carbon', 68),
(52, 1, 17, 'Agenti economici', 'oxid de carbon', 35),
(53, 1, 18, 'Agenti economici', 'oxid de carbon', 187),
(54, 1, 19, 'Agenti economici', 'oxid de carbon', 73),
(55, 1, 20, 'Agenti economici', 'oxid de carbon', 28),
(56, 1, 21, 'Agenti economici', 'oxid de carbon', 63),
(57, 1, 22, 'Agenti economici', 'oxid de carbon', 426),
(58, 1, 23, 'Agenti economici', 'oxid de carbon', 94),
(59, 1, 24, 'Agenti economici', 'oxid de carbon', 10),
(60, 1, 25, 'Agenti economici', 'oxid de carbon', 54),
(61, 1, 26, 'Agenti economici', 'oxid de carbon', 65),
(62, 1, 27, 'Agenti economici', 'oxid de carbon', 93),
(63, 1, 28, 'Agenti economici', 'oxid de carbon', 78),
(64, 1, 29, 'Agenti economici', 'oxid de carbon', 26),
(65, 1, 30, 'Agenti economici', 'oxid de carbon', 61),
(66, 1, 31, 'Agenti economici', 'oxid de carbon', 114),
(67, 1, 32, 'Agenti economici', 'oxid de carbon', 96),
(68, 1, 33, 'Agenti economici', 'oxid de carbon', 55),
(69, 1, 34, 'Agenti economici', 'oxid de carbon', 34),
(70, 1, 35, 'Agenti economici', 'oxid de carbon', 83),
(71, 1, 1, 'Agenti economici', 'oxid de azot', 826),
(72, 1, 2, 'Agenti economici', 'oxid de azot', 61),
(73, 1, 3, 'Agenti economici', 'oxid de azot', 7),
(74, 1, 4, 'Agenti economici', 'oxid de azot', 11),
(75, 1, 5, 'Agenti economici', 'oxid de azot', 27),
(76, 1, 6, 'Agenti economici', 'oxid de azot', 26),
(77, 1, 7, 'Agenti economici', 'oxid de azot', 29),
(78, 1, 8, 'Agenti economici', 'oxid de azot', 12),
(79, 1, 9, 'Agenti economici', 'oxid de azot', 8),
(80, 1, 10, 'Agenti economici', 'oxid de azot', 5),
(81, 1, 11, 'Agenti economici', 'oxid de azot', 14),
(82, 1, 12, 'Agenti economici', 'oxid de azot', 11),
(83, 1, 13, 'Agenti economici', 'oxid de azot', 29),
(84, 1, 14, 'Agenti economici', 'oxid de azot', 74),
(85, 1, 15, 'Agenti economici', 'oxid de azot', 7),
(86, 1, 16, 'Agenti economici', 'oxid de azot', 20),
(87, 1, 17, 'Agenti economici', 'oxid de azot', 10),
(88, 1, 18, 'Agenti economici', 'oxid de azot', 18),
(89, 1, 19, 'Agenti economici', 'oxid de azot', 14),
(90, 1, 20, 'Agenti economici', 'oxid de azot', 4),
(91, 1, 21, 'Agenti economici', 'oxid de azot', 12),
(92, 1, 22, 'Agenti economici', 'oxid de azot', 244),
(93, 1, 23, 'Agenti economici', 'oxid de azot', 9),
(94, 1, 24, 'Agenti economici', 'oxid de azot', 1),
(95, 1, 25, 'Agenti economici', 'oxid de azot', 12),
(96, 1, 26, 'Agenti economici', 'oxid de azot', 14),
(97, 1, 27, 'Agenti economici', 'oxid de azot', 28),
(98, 1, 28, 'Agenti economici', 'oxid de azot', 32),
(99, 1, 29, 'Agenti economici', 'oxid de azot', 25),
(100, 1, 30, 'Agenti economici', 'oxid de azot', 15),
(101, 1, 31, 'Agenti economici', 'oxid de azot', 13),
(102, 1, 32, 'Agenti economici', 'oxid de azot', 10),
(103, 1, 33, 'Agenti economici', 'oxid de azot', 6),
(104, 1, 34, 'Agenti economici', 'oxid de azot', 5),
(105, 1, 35, 'Agenti economici', 'oxid de azot', 24),
(106, 1, 1, 'Transport', 'oxid de carbon', 12),
(107, 1, 2, 'Transport', 'oxid de carbon', 8),
(108, 1, 3, 'Transport', 'oxid de carbon', 3),
(109, 1, 4, 'Transport', 'oxid de carbon', 4),
(110, 1, 5, 'Transport', 'oxid de carbon', 6),
(111, 1, 6, 'Transport', 'oxid de carbon', 2),
(112, 1, 7, 'Transport', 'oxid de carbon', 7),
(113, 1, 8, 'Transport', 'oxid de carbon', 15),
(114, 1, 9, 'Transport', 'oxid de carbon', 9),
(115, 1, 10, 'Transport', 'oxid de carbon', 1),
(116, 1, 11, 'Transport', 'oxid de carbon', 8),
(117, 1, 12, 'Transport', 'oxid de carbon', 13),
(118, 1, 13, 'Transport', 'oxid de carbon', 5),
(119, 1, 14, 'Transport', 'oxid de carbon', 10),
(120, 1, 15, 'Transport', 'oxid de carbon', 3),
(121, 1, 16, 'Transport', 'oxid de carbon', 14),
(122, 1, 17, 'Transport', 'oxid de carbon', 6),
(123, 1, 18, 'Transport', 'oxid de carbon', 2),
(124, 1, 19, 'Transport', 'oxid de carbon', 7),
(125, 1, 20, 'Transport', 'oxid de carbon', 4),
(126, 1, 21, 'Transport', 'oxid de carbon', 11),
(127, 1, 22, 'Transport', 'oxid de carbon', 15),
(128, 1, 23, 'Transport', 'oxid de carbon', 8),
(129, 1, 24, 'Transport', 'oxid de carbon', 9),
(130, 1, 25, 'Transport', 'oxid de carbon', 3),
(131, 1, 26, 'Transport', 'oxid de carbon', 6),
(132, 1, 27, 'Transport', 'oxid de carbon', 7),
(133, 1, 28, 'Transport', 'oxid de carbon', 4),
(134, 1, 29, 'Transport', 'oxid de carbon', 5),
(135, 1, 30, 'Transport', 'oxid de carbon', 8),
(136, 1, 31, 'Transport', 'oxid de carbon', 10),
(137, 1, 32, 'Transport', 'oxid de carbon', 2),
(138, 1, 33, 'Transport', 'oxid de carbon', 1),
(139, 1, 34, 'Transport', 'oxid de carbon', 6),
(140, 1, 35, 'Transport', 'oxid de carbon', 9),
(141, 1, 1, 'Transport', 'dioxid de azot', 6),
(142, 1, 2, 'Transport', 'dioxid de azot', 4),
(143, 1, 3, 'Transport', 'dioxid de azot', 1),
(144, 1, 4, 'Transport', 'dioxid de azot', 2),
(145, 1, 5, 'Transport', 'dioxid de azot', 4),
(146, 1, 6, 'Transport', 'dioxid de azot', 1),
(147, 1, 7, 'Transport', 'dioxid de azot', 3),
(148, 1, 8, 'Transport', 'dioxid de azot', 5),
(149, 1, 9, 'Transport', 'dioxid de azot', 2),
(150, 1, 10, 'Transport', 'dioxid de azot', 1),
(151, 1, 11, 'Transport', 'dioxid de azot', 4),
(152, 1, 12, 'Transport', 'dioxid de azot', 2),
(153, 1, 13, 'Transport', 'dioxid de azot', 1),
(154, 1, 14, 'Transport', 'dioxid de azot', 3),
(155, 1, 15, 'Transport', 'dioxid de azot', 1),
(156, 1, 16, 'Transport', 'dioxid de azot', 2),
(157, 1, 17, 'Transport', 'dioxid de azot', 1),
(158, 1, 18, 'Transport', 'dioxid de azot', 1),
(159, 1, 19, 'Transport', 'dioxid de azot', 2),
(160, 1, 20, 'Transport', 'dioxid de azot', 1),
(161, 1, 21, 'Transport', 'dioxid de azot', 2),
(162, 1, 22, 'Transport', 'dioxid de azot', 5),
(163, 1, 23, 'Transport', 'dioxid de azot', 2),
(164, 1, 24, 'Transport', 'dioxid de azot', 2),
(165, 1, 25, 'Transport', 'dioxid de azot', 1),
(166, 1, 26, 'Transport', 'dioxid de azot', 2),
(167, 1, 27, 'Transport', 'dioxid de azot', 2),
(168, 1, 28, 'Transport', 'dioxid de azot', 1),
(169, 1, 29, 'Transport', 'dioxid de azot', 1),
(170, 1, 30, 'Transport', 'dioxid de azot', 2),
(171, 1, 31, 'Transport', 'dioxid de azot', 1),
(172, 1, 32, 'Transport', 'dioxid de azot', 1),
(173, 1, 33, 'Transport', 'dioxid de azot', 1),
(174, 1, 34, 'Transport', 'dioxid de azot', 2),
(175, 1, 35, 'Transport', 'dioxid de azot', 2),
(176, 1, 1, 'Transport', 'hidrocarburi', 5),
(177, 1, 2, 'Transport', 'hidrocarburi', 4),
(178, 1, 3, 'Transport', 'hidrocarburi', 1),
(179, 1, 4, 'Transport', 'hidrocarburi', 2),
(180, 1, 5, 'Transport', 'hidrocarburi', 4),
(181, 1, 6, 'Transport', 'hidrocarburi', 1),
(182, 1, 7, 'Transport', 'hidrocarburi', 3),
(183, 1, 8, 'Transport', 'hidrocarburi', 5),
(184, 1, 9, 'Transport', 'hidrocarburi', 2),
(185, 1, 10, 'Transport', 'hidrocarburi', 1),
(186, 1, 11, 'Transport', 'hidrocarburi', 4),
(187, 1, 12, 'Transport', 'hidrocarburi', 2),
(188, 1, 13, 'Transport', 'hidrocarburi', 1),
(189, 1, 14, 'Transport', 'hidrocarburi', 3),
(190, 1, 15, 'Transport', 'hidrocarburi', 1),
(191, 1, 16, 'Transport', 'hidrocarburi', 2),
(192, 1, 17, 'Transport', 'hidrocarburi', 1),
(193, 1, 18, 'Transport', 'hidrocarburi', 1),
(194, 1, 19, 'Transport', 'hidrocarburi', 2),
(195, 1, 20, 'Transport', 'hidrocarburi', 1),
(196, 1, 21, 'Transport', 'hidrocarburi', 2),
(197, 1, 22, 'Transport', 'hidrocarburi', 5),
(198, 1, 23, 'Transport', 'hidrocarburi', 2),
(199, 1, 24, 'Transport', 'hidrocarburi', 2),
(200, 1, 25, 'Transport', 'hidrocarburi', 1),
(201, 1, 26, 'Transport', 'hidrocarburi', 2),
(202, 1, 27, 'Transport', 'hidrocarburi', 2),
(203, 1, 28, 'Transport', 'hidrocarburi', 1),
(204, 1, 29, 'Transport', 'hidrocarburi', 1),
(205, 1, 30, 'Transport', 'hidrocarburi', 2),
(206, 1, 31, 'Transport', 'hidrocarburi', 1),
(207, 1, 32, 'Transport', 'hidrocarburi', 1),
(208, 1, 33, 'Transport', 'hidrocarburi', 1),
(209, 1, 34, 'Transport', 'hidrocarburi', 2),
(211, 1, 35, 'Transport', 'hidrocarburi', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `waste_statistics`
--

CREATE TABLE `waste_statistics` (
  `waste_id` int(11) NOT NULL,
  `year_id` int(11) DEFAULT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `data` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `waste_statistics`
--

INSERT INTO `waste_statistics` (`waste_id`, `year_id`, `zone_id`, `category_name`, `data`) VALUES
(1, 1, 1, 'Gospodarii', 1231),
(2, 1, 2, 'Gospodarii', 245),
(3, 1, 3, 'Gospodarii', 8),
(4, 1, 4, 'Gospodarii', 7),
(5, 1, 5, 'Gospodarii', 29),
(6, 1, 6, 'Gospodarii', 19),
(7, 1, 7, 'Gospodarii', 29),
(8, 1, 8, 'Gospodarii', 25),
(9, 1, 9, 'Gospodarii', 3),
(10, 1, 10, 'Gospodarii', 16),
(11, 1, 11, 'Gospodarii', 40),
(12, 1, 12, 'Gospodarii', 9),
(13, 1, 13, 'Gospodarii', 23),
(14, 1, 14, 'Gospodarii', 21),
(15, 1, 15, 'Gospodarii', 5),
(16, 1, 16, 'Gospodarii', 4),
(17, 1, 17, 'Gospodarii', 1),
(18, 1, 18, 'Gospodarii', 16),
(19, 1, 19, 'Gospodarii', 26),
(20, 1, 20, 'Gospodarii', 7),
(21, 1, 21, 'Gospodarii', 41),
(22, 1, 22, 'Gospodarii', 25),
(23, 1, 23, 'Gospodarii', 15),
(24, 1, 24, 'Gospodarii', 8),
(25, 1, 25, 'Gospodarii', 27),
(26, 1, 26, 'Gospodarii', 2),
(27, 1, 27, 'Gospodarii', 21),
(28, 1, 28, 'Gospodarii', 15),
(29, 1, 29, 'Gospodarii', 17),
(30, 1, 30, 'Gospodarii', 2),
(31, 1, 31, 'Gospodarii', 10),
(32, 1, 32, 'Gospodarii', 9),
(33, 1, 33, 'Gospodarii', 10),
(34, 1, 34, 'Gospodarii', 116),
(35, 1, 35, 'Gospodarii', 50),
(36, 1, 1, 'Institutii', 629),
(37, 1, 2, 'Institutii', 101),
(38, 1, 3, 'Institutii', 12),
(39, 1, 4, 'Institutii', 3),
(40, 1, 5, 'Institutii', 8),
(41, 1, 6, 'Institutii', 14),
(42, 1, 7, 'Institutii', 7),
(43, 1, 8, 'Institutii', 5),
(44, 1, 9, 'Institutii', 1),
(45, 1, 10, 'Institutii', 6),
(46, 1, 11, 'Institutii', 4),
(47, 1, 12, 'Institutii', 3),
(48, 1, 13, 'Institutii', 9),
(49, 1, 14, 'Institutii', 6),
(50, 1, 15, 'Institutii', 8),
(51, 1, 16, 'Institutii', 1),
(52, 1, 17, 'Institutii', 10),
(53, 1, 18, 'Institutii', 6),
(54, 1, 19, 'Institutii', 4),
(55, 1, 20, 'Institutii', 3),
(56, 1, 21, 'Institutii', 19),
(57, 1, 22, 'Institutii', 5),
(58, 1, 23, 'Institutii', 3),
(59, 1, 24, 'Institutii', 2),
(60, 1, 25, 'Institutii', 11),
(61, 1, 26, 'Institutii', 2),
(62, 1, 27, 'Institutii', 12),
(63, 1, 28, 'Institutii', 6),
(64, 1, 29, 'Institutii', 11),
(65, 1, 30, 'Institutii', 1),
(66, 1, 31, 'Institutii', 5),
(67, 1, 32, 'Institutii', 2),
(68, 1, 33, 'Institutii', 3),
(69, 1, 34, 'Institutii', 44),
(70, 1, 35, 'Institutii', 25),
(71, 1, 1, 'Stradale', 13),
(72, 1, 2, 'Stradale', 2),
(73, 1, 3, 'Stradale', 1),
(74, 1, 4, 'Stradale', 2),
(75, 1, 5, 'Stradale', 10),
(76, 1, 6, 'Stradale', 9),
(77, 1, 7, 'Stradale', 8),
(78, 1, 8, 'Stradale', 6),
(79, 1, 9, 'Stradale', 4),
(80, 1, 10, 'Stradale', 2),
(81, 1, 11, 'Stradale', 4),
(82, 1, 12, 'Stradale', 12),
(83, 1, 13, 'Stradale', 10),
(84, 1, 14, 'Stradale', 5),
(85, 1, 15, 'Stradale', 5),
(86, 1, 16, 'Stradale', 1),
(87, 1, 17, 'Stradale', 8),
(88, 1, 18, 'Stradale', 1),
(89, 1, 19, 'Stradale', 6),
(90, 1, 20, 'Stradale', 12),
(91, 1, 21, 'Stradale', 7),
(92, 1, 22, 'Stradale', 8),
(93, 1, 23, 'Stradale', 4),
(94, 1, 24, 'Stradale', 3),
(95, 1, 25, 'Stradale', 6),
(96, 1, 26, 'Stradale', 1),
(97, 1, 27, 'Stradale', 3),
(98, 1, 28, 'Stradale', 4),
(99, 1, 29, 'Stradale', 5),
(100, 1, 30, 'Stradale', 5),
(101, 1, 31, 'Stradale', 39),
(102, 1, 32, 'Stradale', 16),
(103, 1, 33, 'Stradale', 11),
(104, 1, 34, 'Stradale', 6),
(105, 1, 35, 'Stradale', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `water_statistics`
--

CREATE TABLE `water_statistics` (
  `water_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `substance_name` varchar(255) NOT NULL,
  `data` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `water_statistics`
--

INSERT INTO `water_statistics` (`water_id`, `year_id`, `zone_id`, `substance_name`, `data`) VALUES
(1, 1, 1, 'Reziduuri', 3.40),
(2, 1, 2, 'Reziduuri', 2.30),
(3, 1, 3, 'Reziduuri', 1.80),
(4, 1, 4, 'Reziduuri', 4.70),
(5, 1, 5, 'Reziduuri', 0.50),
(6, 1, 6, 'Reziduuri', 2.20),
(7, 1, 7, 'Reziduuri', 1.10),
(8, 1, 8, 'Reziduuri', 0.90),
(9, 1, 9, 'Reziduuri', 3.00),
(10, 1, 10, 'Reziduuri', 1.40),
(11, 1, 11, 'Reziduuri', 2.00),
(12, 1, 12, 'Reziduuri', 1.20),
(13, 1, 13, 'Reziduuri', 1.60),
(14, 1, 14, 'Reziduuri', 1.90),
(15, 1, 15, 'Reziduuri', 2.50),
(16, 1, 16, 'Reziduuri', 0.30),
(17, 1, 17, 'Reziduuri', 0.90),
(18, 1, 18, 'Reziduuri', 0.60),
(19, 1, 19, 'Reziduuri', 1.30),
(20, 1, 20, 'Reziduuri', 1.80),
(21, 1, 21, 'Reziduuri', 0.70),
(22, 1, 22, 'Reziduuri', 0.40),
(23, 1, 23, 'Reziduuri', 0.90),
(24, 1, 24, 'Reziduuri', 0.60),
(25, 1, 25, 'Reziduuri', 1.50),
(26, 1, 26, 'Reziduuri', 0.20),
(27, 1, 27, 'Reziduuri', 3.80),
(28, 1, 28, 'Reziduuri', 1.70),
(29, 1, 29, 'Reziduuri', 0.80),
(30, 1, 30, 'Reziduuri', 3.00),
(31, 1, 31, 'Reziduuri', 1.40),
(32, 1, 32, 'Reziduuri', 0.70),
(33, 1, 33, 'Reziduuri', 1.00),
(34, 1, 34, 'Reziduuri', 0.30),
(35, 1, 35, 'Reziduuri', 0.20),
(36, 1, 1, 'Sulfati', 1.20),
(37, 1, 2, 'Sulfati', 2.30),
(38, 1, 3, 'Sulfati', 0.80),
(39, 1, 4, 'Sulfati', 3.50),
(40, 1, 5, 'Sulfati', 0.40),
(41, 1, 6, 'Sulfati', 2.10),
(42, 1, 7, 'Sulfati', 1.00),
(43, 1, 8, 'Sulfati', 1.20),
(44, 1, 9, 'Sulfati', 1.50),
(45, 1, 10, 'Sulfati', 1.40),
(46, 1, 11, 'Sulfati', 2.00),
(47, 1, 12, 'Sulfati', 0.90),
(48, 1, 13, 'Sulfati', 1.60),
(49, 1, 14, 'Sulfati', 1.20),
(50, 1, 15, 'Sulfati', 2.50),
(51, 1, 16, 'Sulfati', 0.30),
(52, 1, 17, 'Sulfati', 0.90),
(53, 1, 18, 'Sulfati', 0.60),
(54, 1, 19, 'Sulfati', 1.30),
(55, 1, 20, 'Sulfati', 1.80),
(56, 1, 21, 'Sulfati', 0.70),
(57, 1, 22, 'Sulfati', 0.40),
(58, 1, 23, 'Sulfati', 0.90),
(59, 1, 24, 'Sulfati', 0.60),
(60, 1, 25, 'Sulfati', 1.50),
(61, 1, 26, 'Sulfati', 0.20),
(62, 1, 27, 'Sulfati', 3.80),
(63, 1, 28, 'Sulfati', 1.70),
(64, 1, 29, 'Sulfati', 0.80),
(65, 1, 30, 'Sulfati', 3.00),
(66, 1, 31, 'Sulfati', 1.40),
(67, 1, 32, 'Sulfati', 0.70),
(68, 1, 33, 'Sulfati', 1.00),
(69, 1, 34, 'Sulfati', 0.30),
(70, 1, 35, 'Sulfati', 0.20),
(71, 1, 1, 'Cloruri', 1.20),
(72, 1, 2, 'Cloruri', 0.50),
(73, 1, 3, 'Cloruri', 1.80),
(74, 1, 4, 'Cloruri', 0.30),
(75, 1, 5, 'Cloruri', 0.40),
(76, 1, 6, 'Cloruri', 0.60),
(77, 1, 7, 'Cloruri', 0.70),
(78, 1, 8, 'Cloruri', 0.90),
(79, 1, 9, 'Cloruri', 0.20),
(80, 1, 10, 'Cloruri', 0.10),
(81, 1, 11, 'Cloruri', 0.80),
(82, 1, 12, 'Cloruri', 0.50),
(83, 1, 13, 'Cloruri', 0.30),
(84, 1, 14, 'Cloruri', 0.60),
(85, 1, 15, 'Cloruri', 0.40),
(86, 1, 16, 'Cloruri', 0.20),
(87, 1, 17, 'Cloruri', 0.70),
(88, 1, 18, 'Cloruri', 0.30),
(89, 1, 19, 'Cloruri', 0.10),
(90, 1, 20, 'Cloruri', 0.40),
(91, 1, 21, 'Cloruri', 0.60),
(92, 1, 22, 'Cloruri', 0.50),
(93, 1, 23, 'Cloruri', 0.30),
(94, 1, 24, 'Cloruri', 0.80),
(95, 1, 25, 'Cloruri', 0.20),
(96, 1, 26, 'Cloruri', 0.10),
(97, 1, 27, 'Cloruri', 0.50),
(98, 1, 28, 'Cloruri', 0.60),
(99, 1, 29, 'Cloruri', 0.40),
(100, 1, 30, 'Cloruri', 0.30),
(101, 1, 31, 'Cloruri', 0.20),
(102, 1, 32, 'Cloruri', 0.90),
(103, 1, 33, 'Cloruri', 0.70),
(104, 1, 34, 'Cloruri', 0.40),
(105, 1, 35, 'Cloruri', 0.10),
(106, 1, 1, 'Nitrati', 5.20),
(107, 1, 2, 'Nitrati', 4.70),
(108, 1, 3, 'Nitrati', 8.30),
(109, 1, 4, 'Nitrati', 2.10),
(110, 1, 5, 'Nitrati', 6.00),
(111, 1, 6, 'Nitrati', 3.50),
(112, 1, 7, 'Nitrati', 7.20),
(113, 1, 8, 'Nitrati', 9.80),
(114, 1, 9, 'Nitrati', 10.00),
(115, 1, 10, 'Nitrati', 12.50),
(116, 1, 11, 'Nitrati', 8.60),
(117, 1, 12, 'Nitrati', 1.90),
(118, 1, 13, 'Nitrati', 4.30),
(119, 1, 14, 'Nitrati', 7.80),
(120, 1, 15, 'Nitrati', 5.40),
(121, 1, 16, 'Nitrati', 6.10),
(122, 1, 17, 'Nitrati', 3.70),
(123, 1, 18, 'Nitrati', 2.90),
(124, 1, 19, 'Nitrati', 11.20),
(125, 1, 20, 'Nitrati', 10.40),
(126, 1, 21, 'Nitrati', 1.00),
(127, 1, 22, 'Nitrati', 8.50),
(128, 1, 23, 'Nitrati', 7.60),
(129, 1, 24, 'Nitrati', 4.80),
(130, 1, 25, 'Nitrati', 6.30),
(131, 1, 26, 'Nitrati', 3.20),
(132, 1, 27, 'Nitrati', 5.90),
(133, 1, 28, 'Nitrati', 9.00),
(134, 1, 29, 'Nitrati', 7.40),
(135, 1, 30, 'Nitrati', 3.60),
(136, 1, 31, 'Nitrati', 1.80),
(137, 1, 32, 'Nitrati', 6.70),
(138, 1, 33, 'Nitrati', 8.10),
(139, 1, 34, 'Nitrati', 5.50),
(140, 1, 35, 'Nitrati', 4.00),
(141, 1, 1, 'Fosfor', 10.00),
(142, 1, 2, 'Fosfor', 20.00),
(143, 1, 3, 'Fosfor', 5.00),
(144, 1, 4, 'Fosfor', 15.00),
(145, 1, 5, 'Fosfor', 8.00),
(146, 1, 6, 'Fosfor', 7.00),
(147, 1, 7, 'Fosfor', 25.00),
(148, 1, 8, 'Fosfor', 30.00),
(149, 1, 9, 'Fosfor', 12.00),
(150, 1, 10, 'Fosfor', 18.00),
(151, 1, 11, 'Fosfor', 14.00),
(152, 1, 12, 'Fosfor', 6.00),
(153, 1, 13, 'Fosfor', 8.00),
(154, 1, 14, 'Fosfor', 9.00),
(155, 1, 15, 'Fosfor', 11.00),
(156, 1, 16, 'Fosfor', 22.00),
(157, 1, 17, 'Fosfor', 19.00),
(158, 1, 18, 'Fosfor', 13.00),
(159, 1, 19, 'Fosfor', 15.00),
(160, 1, 20, 'Fosfor', 10.00),
(161, 1, 21, 'Fosfor', 7.00),
(162, 1, 22, 'Fosfor', 18.00),
(163, 1, 23, 'Fosfor', 14.00),
(164, 1, 24, 'Fosfor', 20.00),
(165, 1, 25, 'Fosfor', 23.00),
(166, 1, 26, 'Fosfor', 5.00),
(167, 1, 27, 'Fosfor', 10.00),
(168, 1, 28, 'Fosfor', 15.00),
(169, 1, 29, 'Fosfor', 21.00),
(170, 1, 30, 'Fosfor', 8.00),
(171, 1, 31, 'Fosfor', 12.00),
(172, 1, 32, 'Fosfor', 18.00),
(173, 1, 33, 'Fosfor', 17.00),
(174, 1, 34, 'Fosfor', 25.00),
(175, 1, 35, 'Fosfor', 14.00),
(176, 1, 1, 'Azotat de amoniu', 9.00),
(177, 1, 2, 'Azotat de amoniu', 6.00),
(178, 1, 3, 'Azotat de amoniu', 8.00),
(179, 1, 4, 'Azotat de amoniu', 4.00),
(180, 1, 5, 'Azotat de amoniu', 11.00),
(181, 1, 6, 'Azotat de amoniu', 3.00),
(182, 1, 7, 'Azotat de amoniu', 10.00),
(183, 1, 8, 'Azotat de amoniu', 7.00),
(184, 1, 9, 'Azotat de amoniu', 5.00),
(185, 1, 10, 'Azotat de amoniu', 8.00),
(186, 1, 11, 'Azotat de amoniu', 7.00),
(187, 1, 12, 'Azotat de amoniu', 6.00),
(188, 1, 13, 'Azotat de amoniu', 4.00),
(189, 1, 14, 'Azotat de amoniu', 9.00),
(190, 1, 15, 'Azotat de amoniu', 5.00),
(191, 1, 16, 'Azotat de amoniu', 8.00),
(192, 1, 17, 'Azotat de amoniu', 6.00),
(193, 1, 18, 'Azotat de amoniu', 7.00),
(194, 1, 19, 'Azotat de amoniu', 5.00),
(195, 1, 20, 'Azotat de amoniu', 4.00),
(196, 1, 21, 'Azotat de amoniu', 9.00),
(197, 1, 22, 'Azotat de amoniu', 6.00),
(198, 1, 23, 'Azotat de amoniu', 8.00),
(199, 1, 24, 'Azotat de amoniu', 3.00),
(200, 1, 25, 'Azotat de amoniu', 11.00),
(201, 1, 26, 'Azotat de amoniu', 5.00),
(202, 1, 27, 'Azotat de amoniu', 7.00),
(203, 1, 28, 'Azotat de amoniu', 6.00),
(204, 1, 29, 'Azotat de amoniu', 8.00),
(205, 1, 30, 'Azotat de amoniu', 4.00),
(206, 1, 31, 'Azotat de amoniu', 10.00),
(207, 1, 32, 'Azotat de amoniu', 6.00),
(208, 1, 33, 'Azotat de amoniu', 7.00),
(209, 1, 34, 'Azotat de amoniu', 3.00),
(211, 1, 35, 'Azotat de amoniu', 8.00);

-- --------------------------------------------------------

--
-- Структура таблицы `year`
--

CREATE TABLE `year` (
  `year_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `population` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `year`
--

INSERT INTO `year` (`year_id`, `year`, `population`) VALUES
(1, 2017, 2755000),
(2, 2018, 2707000),
(3, 2019, 2664000),
(4, 2020, 2635000),
(5, 2021, 2615000),
(6, 2022, 2604000),
(7, 2023, 2512000);

-- --------------------------------------------------------

--
-- Структура таблицы `zone`
--

CREATE TABLE `zone` (
  `zone_id` int(11) NOT NULL,
  `zone_name` varchar(255) DEFAULT NULL,
  `sanitation_vehicles` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `zone`
--

INSERT INTO `zone` (`zone_id`, `zone_name`, `sanitation_vehicles`) VALUES
(1, 'Mun.Chisinau', 278),
(2, 'Mun.Balti', 35),
(3, 'Briceni', 19),
(4, 'Donduseni', 7),
(5, 'Drochia', 11),
(6, 'Edinet', 24),
(7, 'Falesti', 17),
(8, 'Floresti', 11),
(9, 'Glodeni', 11),
(10, 'Ocnita', 21),
(11, 'Riscani', 21),
(12, 'Singerei', 14),
(13, 'Soroca', 32),
(14, 'Anenii Noi', 30),
(15, 'Calarasi', 13),
(16, 'Criuleni', 13),
(17, 'Dubasari', 2),
(18, 'Hincesti', 33),
(19, 'Ialoveni', 9),
(20, 'Nisporeni', 9),
(21, 'Orhei', 23),
(22, 'Rezina', 10),
(23, 'Straseni', 8),
(24, 'Soldanesti', 14),
(25, 'Telenesti', 4),
(26, 'Ungheni', 25),
(27, 'Basarabeasca', 10),
(28, 'Cahul', 30),
(29, 'Cantemir', 7),
(30, 'Causeni', 14),
(31, 'Cimislia', 13),
(32, 'Leova', 14),
(33, 'Stefan Voda', 7),
(34, 'Taraclia', 14),
(35, 'U.T.A Gagauzia', 63);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `air_statistics`
--
ALTER TABLE `air_statistics`
  ADD PRIMARY KEY (`air_id`),
  ADD KEY `year_id` (`year_id`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Индексы таблицы `waste_statistics`
--
ALTER TABLE `waste_statistics`
  ADD PRIMARY KEY (`waste_id`),
  ADD KEY `year_id` (`year_id`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Индексы таблицы `water_statistics`
--
ALTER TABLE `water_statistics`
  ADD PRIMARY KEY (`water_id`);

--
-- Индексы таблицы `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`);

--
-- Индексы таблицы `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `air_statistics`
--
ALTER TABLE `air_statistics`
  MODIFY `air_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT для таблицы `waste_statistics`
--
ALTER TABLE `waste_statistics`
  MODIFY `waste_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT для таблицы `water_statistics`
--
ALTER TABLE `water_statistics`
  MODIFY `water_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `air_statistics`
--
ALTER TABLE `air_statistics`
  ADD CONSTRAINT `air_statistics_ibfk_1` FOREIGN KEY (`year_id`) REFERENCES `year` (`year_id`),
  ADD CONSTRAINT `air_statistics_ibfk_2` FOREIGN KEY (`zone_id`) REFERENCES `zone` (`zone_id`);

--
-- Ограничения внешнего ключа таблицы `waste_statistics`
--
ALTER TABLE `waste_statistics`
  ADD CONSTRAINT `waste_statistics_ibfk_1` FOREIGN KEY (`year_id`) REFERENCES `year` (`year_id`),
  ADD CONSTRAINT `waste_statistics_ibfk_2` FOREIGN KEY (`zone_id`) REFERENCES `zone` (`zone_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
