-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 18 2017 г., 13:07
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eesti_linnad`
--

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id_city` int(4) NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `people` int(6) NOT NULL,
  `id_maakond` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id_city`, `city`, `people`, `id_maakond`) VALUES
(1, 'Kohtla-Järve', 100000, 1),
(2, 'Narva', 20000, 1),
(3, 'Sillamäe', 5000, 1),
(4, 'Tartu', 5000, 3),
(5, 'Elva', 3000, 3),
(6, 'Pärnu', 5000, 4),
(7, 'Sindi', 4000, 4),
(8, 'Tallinn', 50000, 2),
(9, 'Maardu', 2000, 2),
(10, 'Jõhvi', 5000, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(4) NOT NULL,
  `picture` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_city` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `picture`, `id_city`) VALUES
(1, '1.jpg', 1),
(2, '2.jpg', 1),
(3, '3.jpg', 2),
(4, '4.jpg', 2),
(5, '5.jpg', 8),
(6, '6.jpg', 8),
(7, '7.jpg', 4),
(8, '8.jpg', 4),
(9, '9.jpg', 6),
(10, '10.jpg', 6),
(11, '11.jpg', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `maakond`
--

CREATE TABLE `maakond` (
  `id_maakond` int(4) NOT NULL,
  `name_maakond` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `capital` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `maakond`
--

INSERT INTO `maakond` (`id_maakond`, `name_maakond`, `capital`, `description`) VALUES
(1, 'Ida-Viru', 'Jõhvi', 'Уезд на северо-востоке Эстонии, граничит на севере и востоке с Россией. Территория уезда простирается до Финского залива на севере, до реки Наровы на востоке и на юге — до Чудского озера. На западе и юго-западе уезда граница тянется через леса и болота Алутагузе, вдоль территории Ляэне-Вируского и Йыгеваского уездов. Площадь Ида-Вирумаа — 3364,05 км², что составляет 7,4 % от площади всей Эстонии.'),
(2, 'Harju', 'Tallinn', 'Харьюмаа выходит к побережью Финского залива Балтийского моря. Примерно соответствует части Харью — одной из восьми исторических областей (маакондов) Эстонии.\r\nНа территории Хаарьюмаа расположены самые известные достопримечательности Эстонии. Многие из них, как, например, водопады Ягала и Кейла – естественного происхождения. Наиболее важное культурное значение имеют объекты, расположенные в Таллине.'),
(3, 'Tartu', 'Tartu', 'Административный центр — город Тарту (население 100 000). Площадь 2993 км², население 153 479 (2012). Состоит из 22 местных самоуправлений (3 города, 19 волостей). Через Тартуский уезд протекает река Эмайыги, которая соединяет Чудское озеро и озеро Выртсъярв и делит уезд на две части. Для природы Тартумаа характерны болотистые низины и холмистые равнины, пересекаемые долинами. Заповедники (заболоченные земли и девственные леса).'),
(4, 'Pärnu', 'Pärnu', 'Самый крупный по площади уезд в Эстонии, расположенный в юго-западной части страны на побережье Рижского залива. Граничит с уездами Ляэнемаа и Рапламаа на севере и Ярвамаа и Вильяндимаа на востоке. Административный центр — город Пярну. Уезд в административном отношении делится на 2 города 17 волостей.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_city`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Индексы таблицы `maakond`
--
ALTER TABLE `maakond`
  ADD PRIMARY KEY (`id_maakond`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id_city` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `maakond`
--
ALTER TABLE `maakond`
  MODIFY `id_maakond` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
