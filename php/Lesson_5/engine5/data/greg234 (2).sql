-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2021 г., 21:29
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `greg234`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(3, 'Политика'),
(4, 'Спорт'),
(5, 'Игры');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `categoty_id` int NOT NULL,
  `views` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `categoty_id`, `views`) VALUES
(4, 'ВОЗ спрогнозировала появление нового смертоносного вируса', '\r\nМОСКВА, 24 мая — РИА Новости. Рано или поздно человечество столкнется с новой пандемией, которая окажется опаснее нынешней, заявил генеральный директор Всемирной организации здравоохранения (ВОЗ) Тедрос Адханом Гебрейесус.\r\n\"Появится другой вирус, который будет более заразным и смертоносным, чем этот\", — сказал он, выступая на открытии 74-й сессии ВОЗ.\r\nПрохожие на одной из улиц Уханя - РИА Новости, 1920, 24.05.2021\r\n10:45\r\nВ МИД Китая прокомментировали сообщения о болезни трех вирусологов до пандемии\r\nПо мнению главы организации, именно борьба с вирусами показывает, что государствам следует сотрудничать друг с другом, а не соревноваться.\r\n\"По факту мы стоим перед выбором: действовать сообща или быть незащищенными\", — заключил Гебрейесус.\r\nВсемирная ассамблея здравоохранения проходит с 24 мая по 1 июня в виртуальном формате. Ее основная тема — борьба с пандемией COVID-19 и предотвращение новых глобальных чрезвычайных ситуаций в области здравоохранения. В работе ассамблеи принимают участие делегации со всего мира.', 3, 0),
(6, 'Глава немецкой делегации рассказал о впечатлениях от поездки в Крым', 'СИМФЕРОПОЛЬ, 24 мая — РИА Новости. Жители Германии очень хотят попасть в Крым, чтобы увидеть прогресс в развитии полуострова, заявил глава немецкой делегации Виктор Триппель.\r\nДвадцать второго мая 25 граждан ФРГ приехали в российский регион в рамках проекта народной дипломатии \"Мирный Крым — своими глазами. Крымские реалии без европейских домыслов\".\r\n\"Наша дружба будет продолжаться. Мы от всего сердца ездим к вам в гости. Я никого (из участников поездки. — Прим. ред.) не уговаривал, никому деньги не давал. Люди сами приехали — и еще приедут. Все очень хотят попасть в Крым, посмотреть своими глазами, как у вас все здесь замечательно\", — сказал Триппель на встрече в крымском парламенте.\r\n\r\nОн уточнил, что уже не в первый раз привозит немецких туристов на полуостров, подчеркнув, что это безопасный регион.', 4, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoty_id` (`categoty_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`categoty_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
