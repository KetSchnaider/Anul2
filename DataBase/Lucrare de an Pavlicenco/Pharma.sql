-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 04 2024 г., 15:01
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
-- База данных: `Pharma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_fname` varchar(20) NOT NULL,
  `admin_lname` varchar(20) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_fname`, `admin_lname`, `admin_password`) VALUES
(4, 'admin@gmail.com', 'Pavlicenco', 'Mihaela', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `item`
--

CREATE TABLE `item` (
  `item_id` int(5) NOT NULL,
  `item_title` varchar(250) NOT NULL,
  `item_brand` varchar(250) NOT NULL,
  `item_cat` varchar(15) NOT NULL,
  `item_details` text NOT NULL,
  `item_tags` varchar(250) NOT NULL,
  `item_image` varchar(250) NOT NULL,
  `item_quantity` int(3) NOT NULL,
  `item_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `item`
--

INSERT INTO `item` (`item_id`, `item_title`, `item_brand`, `item_cat`, `item_details`, `item_tags`, `item_image`, `item_quantity`, `item_price`) VALUES
(58, '911 Bisofit Gel balsam pentru articulatii', '911', 'medicine', 'Recomandat ca adjuvant în tratamentul afecțiunilor articulare Proprietăți: Reduce durerea și umflarea, stimulează refacerea țesutului cartilajului și producerea de lichid sinovial, are efecte antiinflamatoare și antireumatice. Medicamentul normalizează procesele metabolice în articulații și îmbunătățește nutriția țesuturilor, restabilește mobilitatea articulațiilor.', 'gel , 100ml', '911BisofitGel.jpeg', 20, 96),
(59, 'Bicard-LF 5mg comp. film. N10x3', 'Bicard-LF', 'medicine', 'Efect antianginos se datorează scăderi necesității de oxigen a miocardului ca urmare a  a reducerii numărului contracțiilor cardiace și scăderea contractilității, prelungirea diastolei, îmbunătățirea perfuziei miocardice. Datorită creșterii presiunii diastolice în ventricolul stîng și creșterea tensiunea din fibrele musculare ventriculare poate crește necesitatea de oxigen, în special la pacienții cu insuficiență cardiacă cronică', 'Betablocante', 'Bicard-LF.jpeg', 20, 24),
(60, 'Cinnabsin comp. N20x3', 'Cinnabsin', 'medicine', 'Cinnabsin este un medicament homeopat.  Se utilizează pentru tratamentul simptomelore inflamaţiilor acute şi cronice ale sinusurilor paranazale (sinuzite).', 'Homeopatice', 'Cinnabsin.jpeg', 40, 130),
(61, 'Captopril 25mg comp. N10x4', 'Captopril', 'medicine', 'Captopril se administrează oral cu o oră înainte de mese. În hipertensiunea arterială medie sau uşoară iniţial câte 12,5 mg captopril de 2 ori pe zi. Doza terapeutică medie constituie câte 50 mg de 2 ori pe zi. Doza de susţinere este câte 25 mg de 2 ori pe zi.', 'Antihipertensive', 'Captopril.jpeg', 10, 22),
(62, 'Adaptol 500mg comp. N20', 'Olainfarm', 'medicine', 'Indicaţii terapeutice - Nevroze şi tulburări nevrotice (anxietate, labilitate emoţională, nelinişte, fobie). - Cardialgii de diversă geneză, care nu sunt asociate cu cardiopatia ischemică. - Pentru ameliorarea toleranţei neurolepticelor şi tranchilizantelor. - În componenţa terapiei asociate pentru a reduce atracţia către fumat.', 'Anxietate și depresie', 'Adaptol.jpeg', 5, 183),
(63, 'Acarilbial 30% sol.cutan. 277mg/ml 200ml', 'Bial-Portela S.A.', 'medicine', 'Lichid limpede, incolor până la galben pal, aromat.', 'Scabie', 'Acarilbial.jpeg', 40, 110),
(64, '911 Namozoli', '911', 'self-care', 'Cremă de combatere a bataturilor și calozitatilor 100ml', 'Gel', '911Namozoli.jpeg', 60, 91),
(65, 'Cremă de mâini Barhatnie Ruciki', 'Barhatnie Ruciki', 'self-care', 'Cremă de mâini Barhatnie Ruciki hipoalergică fără miros 72ml', 'Cremă de mâini', 'BarhatnieRuciki.jpeg', 200, 35),
(66, 'Euphidra AmidoMio Crema pentru baie', 'Euphidra AmidoMio', 'self-care', 'Euphidra AmidoMio Crema pt baie 400ml Dermatologic testat pe pielea sensibila. Hipoalergic. Crema pt baie este recomandata pentru igiena zilnica a pielii sensibile a bebelusului si adultilor.', 'Crema pentru baie', 'Euphidria.jpeg', 45, 104),
(67, 'Biomed Pastă de dinți White Complex', 'Biomed', 'self-care', 'O pastă de dinți care are un efect de albire datorită unui complex de trei tipuri de cărbune: activat, bambus și lemn. Combinația de ingrediente active restabilește smalțul deteriorat, dizolvă placa și asigură efecte antiinflamatorii și dezinfectante.', 'Pastă de dinți', 'BiomedWhiteComplex.jpeg', 200, 79),
(68, 'Biomed Apă de gură SuperWhite 500ml', 'Biomed', 'self-care', 'Biomed super alb agent de clătire - aceasta este o clătire plăcută și discretă cu aromă de nucă de cocos, care va ajuta la menținerea stării de spirit potrivite pe tot parcursul zilei.', 'Apă de gură', 'BiomedSuperWhite.jpeg', 20, 105);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_quantity` int(3) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `item_id`, `user_id`, `order_quantity`, `order_date`, `order_status`) VALUES
(227, 58, 55, 2, '2024-02-02', 1),
(228, 58, 55, 3, '2024-02-02', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_Lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_id` int(3) NOT NULL,
  `user_fname` varchar(20) NOT NULL,
  `user_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_Lname`, `email`, `user_password`, `user_id`, `user_fname`, `user_address`) VALUES
('user', 'user@gmail.com', 'user', 55, 'user', 'mun.Chisinau , str.Studentilor ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Индексы таблицы `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
