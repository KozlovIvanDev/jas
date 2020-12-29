-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 01 2020 р., 18:55
-- Версія сервера: 10.4.14-MariaDB
-- Версія PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `userlistdb`
--

-- --------------------------------------------------------

--
-- Структура таблиці `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `full_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ref_id` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name_subject` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `home_work` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `rating` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `subjects`
--

INSERT INTO `subjects` (`id`, `name_subject`, `home_work`, `rating`) VALUES
(1, 'Математика', '№ 25, 26,27,28, с.15', ''),
(2, 'Фізика', 'П. 17, вправа 22', '11'),
(3, 'Хімія', 'досліди, с.125', ''),
(4, 'Фіз-ра', 'взуття', '10'),
(5, 'Інформатика', 'П.10', '9'),
(6, 'Економіка', 'П.24', ''),
(7, 'Музика', 'Вивчити пісню', ''),
(8, 'Українська мова', 'Вправа 25', '6'),
(9, 'Історія', 'П. 15', '11'),
(10, 'Зарубіжна література', 'С. 27-29', '');

-- --------------------------------------------------------

--
-- Структура таблиці `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `teachers`
--

INSERT INTO `teachers` (`id`, `full_name`, `email`, `username`, `password`) VALUES
(1, 'Урокова Світлана Петрівна', 'sveta@gmail.com', 'svetlana', '111SS'),
(3, 'Кокошкіна Марія Іванівна', 'mariya@gmail.com', 'mary', '111SS');

-- --------------------------------------------------------

--
-- Структура таблиці `usertbl`
--

CREATE TABLE `usertbl` (
  `id` int(11) NOT NULL,
  `full_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `usertbl`
--

INSERT INTO `usertbl` (`id`, `full_name`, `email`, `username`, `password`) VALUES
(1, 'Alex', 'www@ww.ua', 'Alexa', '111SS');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Індекси таблиці `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_subject` (`name_subject`);

--
-- Індекси таблиці `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Індекси таблиці `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблиці `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
