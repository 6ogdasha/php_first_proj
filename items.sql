-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2020 г., 11:38
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `proj`
--

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `title` varchar(355) NOT NULL,
  `descrip` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `price` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`title`, `descrip`, `img`, `price`, `id`) VALUES
('Гражданская оборона \"The best p.3\"', 'Егор Летов и его наследие будущим поколениям', 'img/1.jpg', '3 500 руб.', 1),
('Книга по алгоритмам', 'Богдан готовится к олимпиадам по этой книге. Страх и ужас...', 'img/2.jpg', '5 000 руб.', 2),
('Манга One Piece', 'Самая лучшая манга, которая произвела на Богдана огромное впечатление', 'img/3.jpg', '800 руб.', 3),
('Minecraft', 'Любимая игра Богдана. Тысячи часов удовольствия...', 'img/4.jpg', '1 900 руб.', 4),
('Фотоаппарат Nikon D7200', 'В свободное время Богдан фоткает всякие вещи', 'img/5.jpg', '??? руб.', 5),
('\"1984\" Дж. Оруэлл', 'Любимая антиутопия Богдана. Он считает, что события книги коррелируют с нынешним режимом в России', 'img/5.jpg', '300 руб.', 6),
('\"1984\" Дж. Оруэлл', 'Любимая антиутопия Богдана. Он считает, что события книги коррелируют с нынешним режимом в России', 'img/6.jpg', '300 руб.', 7),
('Тимур', 'аыаыва', 'img/7.jpg', '10000', 8),
('фвывфыв', 'фывфывфыы', 'img/1.jpg', '10 100', 9),
('товар 1', 'jgfjgfg', 'img/1.jpg', '1', 11);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
