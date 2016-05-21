-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 21 2016 г., 08:07
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `ID` int(50) NOT NULL,
  `good_name` varchar(100) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `good_price` text NOT NULL,
  `good_desc` varchar(10000) NOT NULL,
  `good_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`ID`, `good_name`, `brand`, `good_price`, `good_desc`, `good_img`) VALUES
(3, 'Mask for deep cleansing Egg Pore Tightening Pack', 'Tony Moly', '1380tg', 'Mask for deep cleansing of the pores is composed of egg whites and components such as clays "bentonite" and "kaolinite", that pull the sebum from the pores, exfoliate and tighten pores and control sebaceous glands. Also contains Camellia extract which has anti-inflammatory action.', 'egg.jpg'),
(4, 'Cream with rose extract Rose', 'Nature Republic', '2000tg', 'Strengthens skin cells and possesses bio-stimulating, tonic effect, improves blood circulation. Stimulates the activity of skin cells, slows the aging process, prevent the formation of wrinkles and makes the skin smooth and elastic', 'cream.jpg'),
(5, 'Facial wash Real Nature', 'Nature Republic', '1200tg', 'Rejuvenates the skin, prevents wrinkles and smoothes out those that are already there. Moisturizes, nourishes and prevents acne. Free of parabens, talc, benzophenone, diethanolamine, artificial colors', 'mango.jpg'),
(6, 'Lightening lotion Pure Vita White', 'Nature Republic', '1500tg', 'Tool vitality to the skin, retains moisture, and instantly improves skin tone, lighten it', 'white.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `status`) VALUES
(1, 'vv', 'gvvv', 'a@com', '202cb962ac59075b964b', 1),
(2, 'Ardak', 'Shalkarbay', 'ardak.shalkarbay@gma', 'd9d1b168eac8f197e057', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
