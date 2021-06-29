-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 29 2021 г., 08:27
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `imgCatalog`
--

CREATE TABLE `imgCatalog` (
  `id_img_catalog` int(10) UNSIGNED NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_size` float UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `imgCatalog`
--

INSERT INTO `imgCatalog` (`id_img_catalog`, `img_name`, `img_size`) VALUES
(1, '01.jpg', NULL),
(2, '02.jpg', NULL),
(3, '03.jpg', NULL),
(4, '04.jpg', NULL),
(5, '05.jpg', NULL),
(6, '06.jpg', NULL),
(7, '07.jpg', NULL),
(8, '08.jpg', NULL),
(9, '09.jpg', NULL),
(10, '11.jpg', NULL),
(11, '12.jpg', NULL),
(12, '13.jpg', NULL),
(13, '14.jpg', NULL),
(14, '15.jpg', NULL),
(15, '16.jpg', NULL),
(16, '17.jpg', NULL),
(17, '18.jpg', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `imgCatalog`
--
ALTER TABLE `imgCatalog`
  ADD PRIMARY KEY (`id_img_catalog`),
  ADD UNIQUE KEY `img_name` (`img_name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `imgCatalog`
--
ALTER TABLE `imgCatalog`
  MODIFY `id_img_catalog` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
